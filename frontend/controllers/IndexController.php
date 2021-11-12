/* ��������� ������������ ���� */
namespace app\controllers;

use Yii;

use yii\web\Controller;
use app\models\ContactForm;
use yii\web\Request;

/* ��������� ����� Controller */
class IndexController extends Controller
{
    
    /* ��������� ������� */
    public function actionContact()
    {
       /* ��� �������� ��������� ����� ������������ ���� ���� */
       $this->layout = 'contacts';
       
        /* ������� ��������� ������ */
        $model = new ContactForm();
        /* �������� ������ �� ����� � ��������� ������� �������� contact, ���� ��� ������, ������� ��������� �� ������� �������� ��������� �� ����� */
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['emailto'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        /* ����� ������� ����� �������� ����� */
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }
}