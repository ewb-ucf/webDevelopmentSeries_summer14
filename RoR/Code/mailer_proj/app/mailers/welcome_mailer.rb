class WelcomeMailer < ActionMailer::Base
  default from: "ucf.ewb.president@gmail.com"

	def registration_confirmation 
		mail :to => "ucf.ewb.president@gmail.com", :from => "ucf.ewb.president@gmail.com", :subject => "Subject line"
	end
end
