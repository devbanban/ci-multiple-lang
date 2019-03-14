<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail_model extends CI_Model {

	public function get_all_mail()
	{
		return $this->db->get('tbl_mail')->result_array();
	}
	

}

/*
db



CREATE TABLE `tbl_mail` (
  `mid` int(11) NOT NULL,
  `content_en` varchar(200) NOT NULL,
  `content_th` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `tbl_mail` (`mid`, `content_en`, `content_th`) VALUES
(1, 'aaaaaaaaaaaaa', 'หหหหหหหหหหหหหหห'),
(2, 'hhhhhhhhhhh', 'สสสสสสสสสสส');


ALTER TABLE `tbl_mail`
  ADD PRIMARY KEY (`mid`);
  
ALTER TABLE `tbl_mail`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

*/
