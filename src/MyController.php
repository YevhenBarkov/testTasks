<?php


use Doctrine\ORM\EntityManager;

class MyController
{
    private $parameters;
    private $twig;
    private $entityManager;


    function __construct($parameters, EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->parameters = $parameters;
        $loader = new Twig_Loader_Filesystem('templates');
        $this->twig = new Twig_Environment($loader, array(
            'cache' => 'cache',
            'auto_reload' => true
        ));
    }

    public function reg()
    {

        $countries = $this->entityManager->getRepository('Country')->getAllCountries();
        echo $this->twig->render('registration.html.twig', array('countries' => $countries));
    }

    public function log()
    {
        echo $this->twig->render('login.html.twig');
    }

    public function logout()
    {
        if (isset($_SESSION['user'])) {
            session_destroy();
        }
        header("Location: home");

    }

    public function login()
    {
        $badusr = $this->entityManager->getRepository('User')->findOneBy(['login' => $_POST['_login']]);
        if (is_null($badusr)) {
            $badusr = $this->entityManager->getRepository('User')->findOneBy(['email' => $_POST['_login']]);
        }
        if (!is_null($badusr)) {
            if ($badusr->getPassword() === $_POST['_password']) {
                $_SESSION['user'] = $badusr;

                header("Location: home");

            } else {
                echo $this->twig->render('login.html.twig', array('error' =>'Wrong password'));
            }
        } else {
            echo $this->twig->render('login.html.twig', array('error' =>'No users with this login'));
        }
    }

    public function registration()
    {
        $error = array();
        $usr = new User();
        $usr->setLogin($_POST['_login']);
        $usr->setEmail($_POST['_email']);
        $usr->setRealName($_POST['_real_name']);
        $usr->setBirthDate(new DateTime($_POST['_birth_date']));
        $usrCountry = $this->entityManager->getRepository('Country')->find($_POST['_country']);
        if (is_null($usrCountry)) {
            $error['country'] = 'Please, select country from the list';
        }
        $usr->setCountry($usrCountry);
        $usr->setPassword($_POST['_password']);
        if (!$_POST['_checked']) {
            $error['checked'] = 'Checkbox, must be checked';
        }
        $errors = $error + $this->userValidate($usr);
        if (empty($errors)) {
            $usr->setTimestamp(time());
            $this->entityManager->persist($usr);
            $this->entityManager->flush();
            $_SESSION['user'] = $usr;

            header("Location: home");

        } else {
            $countries = $this->entityManager->getRepository('Country')->getAllCountries();
            $usr->setBirthDate($_POST['_birth_date']);
            echo $this->twig->render('registration.html.twig', array('user' => $usr, 'errors' => $errors, 'countries' => $countries));
        }
    }

    public function home()
    {
        echo $this->twig->render('base.html.twig', array('user' => $_SESSION['user']));
    }

    private function userValidate(User $usr)
    {
        $err = array();

        $badusr = $this->entityManager->getRepository('User')->findOneBy(['login' => $_POST['_login']]);
        if (!is_null($badusr)) {
            $err['user_exist'] = 'User with this login already exist';
        }

        $badusr = $this->entityManager->getRepository('User')->findOneBy(['email' => $_POST['_email']]);
        if (!is_null($badusr)) {
            $err['email_exist'] = 'User with this email already exist';
        }

        if (!preg_match('/^[A-Za-z][A-Za-z0-9]{4,31}$/', $usr->getLogin())) {
            $err['login'] = 'login ' . $usr->getLogin() . ' is not valid
             Minimum of 5 characters,
             Must contain only numbers and characters';
        }
        if (!filter_var($usr->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $err['email'] = 'email ' . $usr->getEmail() . ' is not valid';
        }
        if (!preg_match('/\b([A-Z]{1}[a-z]{1,30}[- ]{0,1}|[A-Z]{1}[- \']{1}[A-Z]{0,1}  
    [a-z]{1,30}[- ]{0,1}|[a-z]{1,2}[ -\']{1}[A-Z]{1}[a-z]{1,30}){2,5}/', $usr->getRealName())
        ) {
            $err['real_name'] = 'real name ' . $usr->getRealName() . ' is not valid';
        }
        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{5,}$/', $usr->getPassword())) {
            $err['password'] = 'password  is not valid: 
            Minimum of 6 characters,
            Must contain at least 1 number, at least one uppercase and least one lowercase character';
        }

        return $err;
    }

}




