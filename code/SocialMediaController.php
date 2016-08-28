<?php

if (!class_exists('SocialMediaController'))
{

	class SocialMediaController extends Extension
	{

		public function SocialMediaLinks()
		{

			return SocialMediaLink::get()->filter(array(
				'isActive' 		=> 1
			))->sort(array(
				'Sort'			=> 'ASC'
			));

		}

	}

}

?>