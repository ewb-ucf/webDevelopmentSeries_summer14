class WelcomeController < ApplicationController
  def index
  	WelcomeMailer.registration_confirmation.deliver
  end
end
