ActionMailer::Base.delivery_method = :smtp
ActionMailer::Base.smtp_settings = {
:address => "smtp.servername.com",
:port => 587,
:domain => "gmail.com",
:user_name => "myemail@gmail.com",
:password => "password",
:authentication => "plain",
:enable_starttls_auto => true
}