class UserSessionsController < ApplicationController
	def new
	end

	def create
		if login(params[:email], params[:password])
			redirect_back_or_to(projects_path, message: 'Logged in')
		else
			flash.now.alert = "Login failed."
			render action: :new
		end
	end

	def destroy
		#Provided by sorcery
		logout
		redirect_to(:projects, message: 'Logged out!')
	end
end
