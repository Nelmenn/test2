/* ќбъ€вл€ем пространство имен */
namespace app\controllers;

use Yii;

use yii\web\Controller;
use app\models\ContactForm;
use yii\web\Request;

/* –асшир€ем класс Controller */
class IndexController extends Controller
{
    
    /* ќбъ€вл€ем функцию */
    public function actionContact()
    {
       /* ƒл€ страницы контактов можно использовать свой слой */
       $this->layout = 'contacts';
       
        /* —оздаем экземпл€р класса */
        $model = new ContactForm();
        /* получаем данные из формы и запускаем функцию отправки contact, если все хорошо, выводим сообщение об удачной отправке сообщени€ на почту */
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['emailto'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        /* иначе выводим форму обратной св€зи */
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }
}