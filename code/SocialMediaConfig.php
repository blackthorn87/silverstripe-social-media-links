<?php

if (!class_exists('SocialMediaConfig'))
{

	class SocialMediaConfig extends DataExtension
	{

		public function updateCMSFIelds(FieldList $fields)
		{
			$fields->addFieldToTab (
				'Root.Main',
				ToggleCompositeField::create(
					// Unique Field ID
					'social_media_links',

					// Field Name
					'Socal Media Links',

					// Contents of the Field
					array (
						GridField::create(
							// Field ID
							'social_links',

							// Field Label
							'Social Media Links',

							// Source
							SocialMediaLink::get(),

							// Create Field ??
							GridFieldConfig_RecordEditor::create()
						)
					)
				)->setHeadingLevel(4)->setStartClosed(true)
			)
		}

	}

}

?>