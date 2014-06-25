class ProjectsController < ApplicationController
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


	def destroy
    	@project = Project.find(params[:id])
    	@project.destroy

    	redirect_to projects_path
  	end

end
