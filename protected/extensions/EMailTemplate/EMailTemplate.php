<?php
class EMailTemplate extends CComponent {

	public $options=array();

	/**
	 * @var string Content, Set the Site URL on EMail Template
	 */
	public $site_url= null;
	/**
	 * @var string Content, Set the Email Subject.
	 */
	public $subject= null;
	/**
	 * @var string Content, Set the FirstName.
	 */
	public $firstname = null;
	/**
	 * @var string Content, Set the LastName.
	 */
	public $lastname = null;
	/**
	 * @var string Content, Set the Content.
	 */
	public $content = null;
	/**
	 * @var string Header Image, Set the Header Image.
	 */
	public $header_image = null;
	/**
	 * @var string Thanks, Set the Thanks Message.
	 */
	public $thanks_text= null;
	/**
	 * @var string Footer, Set the footer on EMail Template.
	 */
	public $footer = null;

	/**
	 * @var string Email, or receivers of the mail.
	 */
	public $email = null;
	/**
	 * @var string AddBcc, or receivers of the mail from addbcc.
	 */
	public $add_bcc = null;




	private static $_phpThumbOptions;


	public function init()
	{

		self::$_phpThumbOptions=$this->options;
	}




	/**
	 * @Method		  :	EMailTemplate
	 * @Params		  :
	 * @author        : Ankit Modi
	 * @created		  :	07 July 2013
	 * @Modified by	  :
	 * @modified	  :
	 * @Comment		  : This Function will check the View and Send a mail Template.
	 */

	/**
	 * Declares class-based actions.
	 */

	public function returnSomething($options){
		$message = $this->View($options);
		$result = $this->actionMailSend($email=$options["email"],$list_emails='', $options["username"], $subject=$options["subject"], $message);
		return $message;
	}

	/**
	 * @Method		  :	EMailTemplate
	 * @Params		  :
	 * @author        : Ankit Modi
	 * @created		  :	07 July 2013
	 * @Modified by	  :
	 * @modified	  :
	 * @Comment		  : This Function will Set the view on Email Template.
	 */

	/**
	 * Declares class-based actions.
	 */

	public function View($view){
		$site_url=$view["site_url"];
		$subject=$view["subject"];
		$header_image = $view['header_image'];
		$username=$view["username"];
		$content=$view["content"];
		$thanks_text=$view["thanks_text"];
		$footer=$view["footer"];

		return <<<ADMIN_FORM
		
		
   <table style="width: 567px; font-family: Arial,Helvetica;line-height: normal;" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
			<td>
                <table style="width: 100%;">
                    <tbody>
                        <tr>
                            <td style="padding: 0px;" align="left">
                            <td style="padding: 0px; height: 45px;" align="center">$header_image</strong>
                            </td>
                            
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center">
                <table style="width: 567px; border: 1px solid #e6e6e6;" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td style="padding: 20px 20px; font-family: Arial, Helvetica; color: #666666; font-size: 12px;" colspan="2">
                                <table style="width: 100%;" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td colspan="2" style="color: #666666; font-size: 12px;" align="left"><strong>Dear $username </strong>,</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="color: #666666; font-size: 12px;">
                                            $content
                                            </td>
                                        </tr>

                                        

                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" style="padding: 0px 20px; font-family: Arial, Helvetica; color: #666666; font-size: 16px;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="color: #691712;"><strong>$thanks_text</strong></td>
                                        </tr>
                                        
                                        <tr>
                                            <td style="color: #59acff;"><a href=$site_url style="text-decoration: none; color: #59acff;"><strong>$site_url</strong></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr><br />
    <tr>
        <td style="font-family: Arial, Helvetica; color: #666666; font-size: 14px;" align="center">
            <table style="width: 567px;" bgcolor="#EDEDEB">
                <tbody>
                    <tr>
                        <td style="padding: 0px; height: 45px;" align="center">$footer <a href="contact" style="color: #59acff;">
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</tbody>
</table>

ADMIN_FORM;
	}


	/**
	 * @Method		  :	EMailTemplate
	 * @Params		  :
	 * @author        : Ankit Modi
	 * @created		  :	07 July 2013
	 * @Modified by	  :
	 * @modified	  :
	 * @Comment		  : This Function will Returns the Email Template Parameter.
	 */

	/**
	 * Declares class-based actions.
	 */
	public function PassParameterOptions($options){
		$options = array(
					'site_url'=>$this->site_url,
					'subject'=>$this->subject,
					'username' => ucwords($this->firstname.'&nbsp;'.$this->lastname),
					'content'=>$this->content,
					'header_image'=>$this->header_image,
					'thanks_text'=>$this->thanks_text,
					'footer'=>$this->footer,
					'email'=>$this->email,
					'add_bcc'=>$this->add_bcc,
			

		);
		return $options;

	}
	/**
	 * @Method		  :	EMailTemplate
	 * @Params		  :
	 * @author        : Ankit Modi
	 * @created		  :	07 July 2013
	 * @Modified by	  :
	 * @modified	  :
	 * @Comment		  : This Function will Set the Mail Functionality Setting.
	 */

	/**
	 * Declares class-based actions.
	 */

	public static function actionMailSend($to,$addBcc="",$firstname,$subject,$message)
	{

		$mail = new JPhpMailer;
		$mail->IsSMTP();

		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;

		$mail->Username = 'test@gmail.com';
		$mail->Port = '587';
		$mail->Password = '123123';

		$mail->SetFrom('test@gmail.com', 'Ankit Modi');
		$mail->Subject = $subject;
		$body = $message;
		$mail->MsgHTML($body);
		$mail->AddAddress($to, $firstname);
		if(count($addBcc)>1)
		{
			for($i=1;$i<count($addBcc);$i++)
			{
				$mail->AddBCC($addBcc[$i]);
			}
		}

		$mail->IsHTML(true);
		$mail->CharSet = 'UTF-8';

		if($mail->Send())
		{
			return true;
		}
		else{

			return false;
		}

	}
}
?>