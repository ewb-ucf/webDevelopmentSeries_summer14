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
		@project.save

		redirect_to project_path(@project)
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
