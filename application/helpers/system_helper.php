<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('set_header_message'))
{
	function set_header_message($tipe,$title,$message)
	{
		$CI=& get_instance();
		
		$CI->session->set_flashdata('message_header',array(
		'tipe'=>$tipe,
		'title'=>$title,
		'message'=>$message,
		));				
	}
}

if(!function_exists('baca_konfig'))
{
	function baca_konfig($nama)
	{
		$CI=& get_instance();
		$CI->load->library('m_db');
		$s=array(
		'nama_key'=>$nama,
		);
		$item=$CI->m_db->get_row('konfigurasi',$s,'isi');
		return $item;
	}
}

if(!function_exists('user_info'))
{
	function user_info($output='user_id')
	{
		$CI=& get_instance();
		$CI->load->model('login_model');
		$item=$CI->login_model->user_info($output);
		return $item;
	}
}


if(!function_exists('akses'))
{
	function akses()
	{
		$CI=& get_instance();
		$CI->load->model('login_model');
		$item=$CI->login_model->user_info('akses');
		return $item;
	}
}

if(!function_exists('user_photo'))
{
	function user_photo()
	{
		$CI=& get_instance();
		$CI->load->model('login_model');
		$item=$CI->login_model->user_photo();
		return $item;
	}
}

if(!function_exists('menu_active'))
{
	function menu_active($slug2)
	{
		$CI=& get_instance();
		$s=$CI->uri->segment(2);
		if($slug2==$s)
		{
			return true;
		}else{
			return false;
		}
	}
}

if(!function_exists('tema_logo'))
{
	function tema_logo()
	{
		$biasa=base_url().'assets/images/logo.png';
		$photo=baca_konfig('tema-logo');
		$photofile=base_url().'assets/images/'.$photo;
		if(@getimagesize($photofile))
		{
			return $photofile;
		}else{
			return $biasa;
		}
		
	}
}

if(!function_exists('add_css'))
{
	function add_css($url)
	{
		$tmp='<link rel="stylesheet" href="'.$url.'">';
		return $tmp;
	}
}

if(!function_exists('add_js'))
{
	function add_js($url)
	{
		$tmp='<script src="'.$url.'"></script>';
		return $tmp;
	}
}

if(!function_exists('string_create_slug')){
	function string_create_slug($text)
	{	  
	  if (empty($text))
	  {
		return '';
	  }else{
	  	$text = preg_replace('~[^\\pL\d]+~u', '-', $text);
	  	$text = trim($text, '-');
	  	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
	  	$text = strtolower($text);
	  	$text = preg_replace('~[^-\w]+~', '', $text);
	  	return $text;
	  }
	  
	}
}

if(!function_exists('string_word_limit')){
	function string_word_limit($str,$limit=20,$comaDelimiter=FALSE){
		$CI=& get_instance();
		$CI->load->helper('text');
		$item="";
		if($comaDelimiter==TRUE)
		{
			$item=word_limiter($str,$limit);
		}else{
			$item=word_limiter($str,$limit,"");
		}
		return $item;
	}
}

if(!function_exists('field_value'))
{
	function field_value($table,$key,$keyval,$output)
	{
		$CI=& get_instance();
		$CI->load->library('m_db');
		$s=array(
		$key=>$keyval,
		);
		$item=$CI->m_db->get_row($table,$s,$output);
		return $item;
	}
}

if(!function_exists('field_value_custom'))
{
	function field_value_custom($table,$where=array(),$output)
	{
		$CI=& get_instance();
		$CI->load->library('m_db');		
		$item=$CI->m_db->get_row($table,$where,$output);
		return $item;
	}
}

if(!function_exists('fetch_data'))
{
	function fetch_data($table,$where=array(),$order='',$group='',$limit='',$start='')
	{
		$CI=& get_instance();
		$CI->load->library('m_db');
		$item=$CI->m_db->get_data($table,$where,$order,$group,$limit,$start);
		return $item;
	}
}

if(!function_exists('count_data'))
{
	function count_data($table,$where=array())
	{
		$CI=& get_instance();
		$CI->load->library('m_db');		
		$item=$CI->m_db->count_data($table,$where);
		return $item;
	}
}

if(!function_exists('sum_data'))
{
	function sum_data($table,$where=array(),$field)
	{
		$CI=& get_instance();
		$CI->load->library('m_db');
		$item=$CI->m_db->get_sum_row($table,$where,$field);
		return $item;
	}
}