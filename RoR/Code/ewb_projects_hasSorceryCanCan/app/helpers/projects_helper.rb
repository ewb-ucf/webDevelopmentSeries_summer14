module ProjectsHelper
	def project_params
		params.require(:project).permit(:title, :description, :image)
	end
end
