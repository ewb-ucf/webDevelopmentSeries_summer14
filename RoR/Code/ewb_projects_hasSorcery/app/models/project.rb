class Project < ActiveRecord::Base
	has_attached_file :image
	validates_attachment_content_type :image, :content_type => ['image/jpeg','image/jpg','image/png']
end
