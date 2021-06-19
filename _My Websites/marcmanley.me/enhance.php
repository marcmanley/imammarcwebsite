file_get_contents("http://websvcs.itcs.umich.edu/regntpro-bin/search.py?$query") ) {
			$results = strstr($resultPage, '<TABLE BORDER');
			$results = substr($results, 0, strpos($results, '<!-- begin footer.dtml -->'));
			$results = str_replace('/regntpro-bin/search.py', 'archives.php', $results);
			$results = str_replace('http://www.umich.edu/~regents/', '/', $results);