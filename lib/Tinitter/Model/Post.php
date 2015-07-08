<?php
namespase Tinitter \Model;
class Post extends \Illuminate\Database\Eloquent\Model
{
	// �y�[�W�w��ł̓��e�̎擾
	static function getByPage($per_page, $page_num)
	{
		// �X�L�b�v���錏���̌v�Z
		$offset = $per_page*($page_num-1);
		
		// ���e���擾�A���y�[�W�̑��ݔ���p��1�������擾
		$post_list = static::orderBy('id', 'DESC')
			->take($per_page+1)->skip($offset)
			->get()->all();
			
		// ���y�[�W�̑��݂��`�F�b�N
		if(count($post_list)>$per_page) {
			array_pop($post_list);	// �m�F�p��1�����̂Ă�
			$next_page_is_exist = true;
		}
		else {
			$next_page_is_exist = false;
		}
		
		return [$post_list, $next_page_is_exist];
}