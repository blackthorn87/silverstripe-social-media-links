<?php

if (!class_exists('SocialMediaLink')) {

	class SocialMediaLink extends DataObject {

		private static $singular_name	= 'Social Media Link';
		
		private static $plural_name		= 'Social Media Links';
		
		private static $default_sort	= 'Sort,Name,ID';
		
		private static $db = array (
			
			'Name'						=> 'Varchar',
			'FontAwesomeIcon'			=> 'Enum("fa-behance, fa-behance-square, fa-bitbucket, fa-bitbucket-square, fa-delicious, fa-deviantart, fa-digg, fa-dribbble, fa-facebook, fa-facebook-square, fa-git, fa-git-square, fa-github, fa-github-alt, fa-github-square, fa-google, fa-google-plus, fa-google-plus-square, fa-linkedin, fa-linkedin-square, fa-skype, fa-steam, fa-steam-square, fa-trello, fa-tumblr, fa-tumblr-square, fa-twitch, fa-twitter, fa-twitter-square, fa-vimeo-square, fa-vine, fa-youtube, fa-youtube-play, fa-youtube-square","fa-facebook")',
			'sLink'						=> 'Varchar(255)',
			'isActive'					=> 'Boolean',
			'Sort'						=> 'Int'
		
		);
		
		private static $has_one = array (
			
			'Icon'						=> 'Image'
		
		);
		
		private static $defaults = array (
			
			'Name'						=> 'New Social Media Link',
			'FontAwesomeIcon'			=> 'fa-facebook',
			'sLink'						=> '[copy the link of your social media page and paste it here]',
			'isActive'					=> true,
			'Sort'						=> 50
		
		);
		
		private static $summary_fields = array (
			
			'Title' 					=> 'Title',
			'FontAwesomeIcon' 			=> 'Icon',
			'sLink' 					=> 'Link',
			'ActiveState' 				=> 'Active',
			'Sort'						=> 'Sort Order'
		
		);

		private static $casting = array (
			'ActiveState'				=> 'Text'
		);

		public function ActiveState() {
			return $this->isActive ? 'Yes' : 'No';
		}
		
		// set the Title field to the Name
		public function getTitle() {
			
			return $this->Name;
		
		}
		
		public function getCMSFields() {
			
			$fields = parent::getCMSFields();
			
			$fields->addFieldsToTab(
				'Root.Main',
				array (
					TextField::create('Name')->setTitle('Social Network Name'),
					DropdownField::create('FontAwesomeIcon')->setTitle('Select icon (Recommended)')
						->setSource(singleton('SocialMediaLink')->dbObject('FontAwesomeIcon')->enumValues())
						->setDescription('You can <a href="http://fontawesome.io/cheatsheet/" target="_blank">click here</a> to view the icons.'),
					UploadField::create('Icon')->setTitle('Custom Icon')
						->setDescription('Upload you custom icon. The prefered method is to use the dropdown to select your icon.')
						->setAllowedFileCategories('image')
						->setFolderName('Uploads/Social-Logos'),
					TextField::create('sLink')->setTitle('Link'),
					CheckBoxField::create('isActive')->setTitle('Enable Link'),
					TextField::create('Sort')->setTitle('Sort Order'),
				)
			);
			
			return $fields;
		}

		public function faIcon() {

			return "<i class=\"fa " . $this->FontAwesomeIcon . "\"></i>";
		}
	}
}
?>