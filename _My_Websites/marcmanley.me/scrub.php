file_get_contents("http://130.91.228.120") ) {
			$results = strstr($resultPage, '<TABLE BORDER');
			$results = substr($results, 0, strpos($results, '<!-- begin footer.dtml -->'));
			$results = str_replace('/regntpro-bin/search.py', 'archives.php', $results);
			$results = str_replace('http://www.umich.edu/~regents/', '/', $results);