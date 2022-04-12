<?php

namespace app\controllers;

use app\models\AddCatForm;
use app\models\AddDogForm;
use app\models\AddNewsForm;
use app\models\AddUrgentCaseForm;
use app\models\Cats;
use app\models\Dogs;
use app\models\LoginForm;
use app\models\MyLoginForm;
use app\models\News;
use app\models\UploadImage;
use app\models\UrgentCase;
use app\models\Users;
use app\models\VolunteerForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\RegistrationForm;
use yii\web\IdentityInterface;
use yii\web\UploadedFile;

class PagesController extends Controller
{
    public function actionIndex() {

/*        $auth = Yii::$app->authManager;
        $admin = Yii::$app->authManager->createRole('admin');
        //$admin->description = 'Admin';
        //Yii::$app->authManager->add($admin);

        $user = Yii::$app->authManager->createRole('user');
        //$user->description = 'User';
        //Yii::$app->authManager->add($user);

        $c_admin = Yii::$app->authManager->createPermission('canAdmin');
        //$c_admin->description = 'Access to admin';
        //Yii::$app->authManager->add($c_admin);

        $c_Button = Yii::$app->authManager->createPermission('canButton');
        //$c_Button->description = 'Access to push on Button';
        //Yii::$app->authManager->add($c_Button);

        $auth->addChild($admin, $c_admin);
        $auth->addChild($user, $c_Button);
        $auth->addChild($admin, $user);

        $auth->assign($user, 2);
        $auth->assign($admin, 1); */

        return $this->render('index');
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['log-in', 'registration', 'profile'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['log-in', 'registration'],
                        'roles'=> ['?']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['profile'],
                        'roles'=> ['user']
                    ]
                ]
            ]
        ]; // TODO: Change the autogenerated stub
    }

    public function actionAbout()
    {
        $volunteer = new VolunteerForm();

        if ($volunteer-> load(Yii::$app->request->post())){
            if ($volunteer->save()){
                Yii::$app->session->setFlash('success', 'Data catched');
                return $this->refresh();}
            else{
                Yii::$app->session->setFlash('error', 'Error');
            }
        }
        return $this->render('about', compact('volunteer'));
    }

    public function actionFaq()
    {
        return $this->render('faq');
    }

    public function actionCats()
    {
        $cats = Cats::find()->asArray()->all();
        return $this->render('cats', compact('cats'));
    }

    public function actionDogs()
    {
        $dogs = Dogs::find()->asArray()->all();
        return $this->render('dogs', compact('dogs'));
    }

    public function actionAnimal($id, $type)
    {
        $id = Yii::$app->request->get('id');
        $type = Yii::$app->request->get('type');
        if ($type == 'Dog'){
            $pet = Dogs::findOne($id);
            return $this->render('animal', compact('pet'));}
        else {
            $pet = Cats::findOne($id);
            return $this->render('animal', compact('pet'));
        }
    }

    public function actionNews($id, $type)
    {
        $id = Yii::$app->request->get('id');
        $type = Yii::$app->request->get('type');
        if ($type == 'News'){
            $news = News::findOne($id);
            return $this->render('news', compact('news'));}
        else {
            $news = UrgentCase::findOne($id);
            return $this->render('news', compact('news'));
        }
    }

    public function actionNewsPage()
    {
        $urgent_case = UrgentCase::find()->asArray()->all();
        $news = News::find()->asArray()->all();
        return $this->render('news-page', compact('news', 'urgent_case'));
    }

    public function actionProfile()
    {
        $image = new UploadImage();

        $urgentCase = new AddUrgentCaseForm();
        if ($urgentCase-> load(Yii::$app->request->post())){
            $urgentCase->image = UploadedFile::getInstance($urgentCase, 'image');
            if ($urgentCase->image){
            $image->image = UploadedFile::getInstance($urgentCase, 'image');
            $image->upload();}
            else{
                $urgentCase->image = 'NoImage.jpg';
            }
            $urgentCase->user_id = Yii::$app->user->getId();
            if ($urgentCase->save()){
                Yii::$app->session->setFlash('successUrgentCase');
                return $this->refresh();}
            else{
                Yii::$app->session->setFlash('errorUrgentCase');
            }
        }

        $news = new AddNewsForm();
        if ($news-> load(Yii::$app->request->post())){
            $news->image = UploadedFile::getInstance($news, 'image');
            if ($news->image){
            $image->image = UploadedFile::getInstance($news, 'image');
            $image->upload();}
            else{
                $news->image = 'NoImage.jpg';
            }
            if ($news->save()){
                Yii::$app->session->setFlash('successNews');
                return $this->refresh();}
            else{
                Yii::$app->session->setFlash('errorNews');
            }
        }

        $cat = new AddCatForm();
        if ($cat-> load(Yii::$app->request->post())){
            $cat->photo = UploadedFile::getInstance($cat, 'photo');
            if ($cat->photo){
            $image->image = UploadedFile::getInstance($cat, 'photo');
            $image->upload();}
            else {
                $cat->photo = 'NoImage.jpg';
            }
            $cat->user_id = Yii::$app->user->getId();
            if ($cat->save()){
                Yii::$app->session->setFlash('successCat');
                return $this->refresh();}
            else{
                Yii::$app->session->setFlash('errorCat');
            }
        }

        $dog = new AddDogForm();
        if ($dog-> load(Yii::$app->request->post())){
            $dog->photo = UploadedFile::getInstance($dog, 'photo');
            if ($dog->photo){
            $image->image = UploadedFile::getInstance($dog, 'photo');
            $image->upload();}
            else {
                $dog->photo = 'NoImage.jpg';
            }
            $dog->user_id = Yii::$app->user->getId();
            if ($dog->save()){
                Yii::$app->session->setFlash('successDog');
                return $this->refresh();}
            else{
                Yii::$app->session->setFlash('errorDog');
            }
        }
        return $this->render('profile', compact('dog', 'cat', 'news', 'urgentCase'));


    }

    public function actionLogIn()
    {
        $this->layout = 'form';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new MyLoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('log-in', [
            'model' => $model,
        ]);
    }

    public function actionRegistration()
    {
        $user = new RegistrationForm();

        $this->layout = 'form';
        if ($user-> load(Yii::$app->request->post())){
            $user->image = 'NoImage.jpg';
            if ($user->save()){
                $auth = Yii::$app->authManager;
                $auth->assign($auth->getRole('user'), $user->id);
                Yii::$app->session->setFlash('success', 'Data catched');
                return $this->refresh();}
                else{
                    Yii::$app->session->setFlash('error', 'Error');
                }
            }
        return $this->render('registration', compact('user'));
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}