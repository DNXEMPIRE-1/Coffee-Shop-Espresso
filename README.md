# Coffee-Shop-
--Espresso Express

# <img src="https://emojis.slackmojis.com/emojis/images/1616212945/22482/coffee_cup.gif?1616212945" width=40px/>&nbsp; Coffee Espresso Shop

😉 Heyyy !! Nice To See you!! we made coffee cafeteria website using php with login/register authentication and with admin portal (using mysql database)

<b>Link :-</b> <a href="http://eecafeteria.epizy.com/">http://eecafeteria.epizy.com/</a>
<br><i>Forget passowrd mail probably in spam . Please check spam to reset password</i>

<b>Admin portal :-</b> <a href="http://eecafeteria.epizy.com/index_ad.php">http://eecafeteria.epizy.com/index_ad.php</a>
<br><i>Email and Password for admin portal is mentioned below</i>

---


# ✨ Some implemented Features

- [x] <i>🔐 Login/Register Authentication</i> 
- [x] <i>🐇 Form Validation Using Ajax</i> 
- [x] <i>🔑 Password Stored Encrypted In Database Using PHP Encryption (Hash-12)</i> 
- [x] <i>📧 Message is send to mail using <a href="https://github.com/PHPMailer/PHPMailer">PHP Mailer Libraray</a></i>
- [X] <i>☁ Forget Password :- Reset Password Link Send To your Mail</i>
- [X] <i>🛒 cart and order functionality</i>
- [X] <i>🧾 history order page</i>
- [X] <i>🎫 admin portal</i> 
- [X] <i>🍽 admin can add add new menu item and edit or delete menu item </i>
- [X] <i>📈 graph analysis for admin to check peak time and number of order in day</i>

---

# 🔑 Forget Password Mail

<i>Please check your spam if you still donot recieve mail please add issue </i>

---

# 🔐 Admin Authentication

* Email - admin@gmail.com
* Password - 123456

---

# 📸 Screenshots

adding in a few
---
# ☁ Remeber After Clonning

Make Database and then create table using sql files uploaded here or Click <a href='https://github.com/YashikGarg/Espresso-Express/tree/main/database'>Here</a>

After Clonning Make Changes Of Database Information  in <b> config.php(Ln 2) and sendmsg.php(Ln 4)</b> and replace with your own databse name,password,host and username

<b>
  
```
$conn=new mysqli($your_servername, $your_username, $your_password, $your_dbname);
```
 </b>

And Also Replace YOUR Eamil And Password In <b>sendmsg.php(Ln 52,Ln 53) And  check_reset.php(Ln 29,Ln 30) - 
```
53. $mail->Username = 'your_email';             //Replace With Your Mail
54. $mail->Password = 'your_email_password';    //Replace With Your Mail Password 
```
 </b> 

And replace reciptent in  <b>sendmsg.php(Ln 60)

```
60. $mail->addAddress('your_reciptent', 'Admin');   //Replace With Your  Recipient
```
___
> If You ♥ It Please Drop a ⭐ 😉
