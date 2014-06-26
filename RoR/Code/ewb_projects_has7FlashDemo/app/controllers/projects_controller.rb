class ProjectsController < ApplicationController

	include ProjectsHelper

	def index
		@projects = Project.all
	end

	def show
		@project = Project.find(params[:id])
	end

	def new
		@project = Project.new
	end

	"""
	#Insecure way of passing params! USER STRONG PARAMS INSTEAD
	def create
		@project = Project.new
		@project.title = params[:project][:title]
		@project.description = params[:project][:description]
		@project.save
		redirect_to project_path(@project)
	end
	"""

	def create
		@project = Project.new(project_params)
		if @project.save
			#flash[:notice] = "You're project was saved!"
			flash.notice = "You're project was saved!"
			redirect_to project_path(@project)
		else
			#Flash.now makes it available in the current action
			flash.now[:error] = "Some error saving prjoect"
			redirect_to projects_path
		end
	end

	def edit
		@project = Project.find(params[:id])
	end

	def update
		@project = Project.find(params[:id])
		@project.update(project_params)
		flash[:notice] = "successfully created"

		redirect_to project_path(@project)
	end

	def destroy
    	@project = Project.find(params[:id])
    	@project.destroy

    	redirect_to projects_path
  	end

end
