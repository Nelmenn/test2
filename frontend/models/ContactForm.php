/* ��������� ������������ ���� */
namespace app\models;

use Yii;
use yii\base\Model;

/* ��������� ����� ����� */
class ContactForm extends Model
{
    /* ���������� ���������� */
    public $name, $email, $subject, $body, $verifyCode;
    
    /* ������� ��� ����� ����� �������� ����� (���������) */
    public function rules()
    {
        return [
            /* ���� ������������ ��� ���������� */
            [ ['name', 'email', 'subject', 'body'], 'required'],
            /* ���� ����������� ����� */
            ['email', 'email'],
            /* ����� */
            ['verifyCode', 'captcha', 'captchaAction'=>'index/captcha'],
        ];
    }

    /* ���������� �������� ����� */
    public function attributeLabels()
    {
        return [
            'verifyCode' => '����������� ���',
            'name' => '���',
            'email' => '����������� �����',
            'subject' => '����',
            'body' => '���������',
        ];
    }

    /* ������� �������� ������ �� ����� */
    public function contact($emailto)
    {
        /* ��������� ����� �� ��������� */
        if ($this->validate()) {    
            Yii::$app->mailer->compose() 
                ->setFrom([$this->email => $this->name]) /* �� ���� */
                ->setTo($emailto) /* ���� */
                ->setSubject($this->subject) /* ��� ����������� */
                ->setTextBody($this->body) /* ����� ��������� */
                ->send(); /* ������� �������� ������ */

            return true;
        } else {
            return false;
        }
    }
}