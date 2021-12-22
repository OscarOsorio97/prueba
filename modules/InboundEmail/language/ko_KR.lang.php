<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(

	'LBL_ASSIGN_TEAM'		=> '팀에 배정',

	'LBL_RE'					=> 'RE:',

	'ERR_BAD_LOGIN_PASSWORD'=> '로그인이나 비밀번호가 맞지 않습니다.',
	'ERR_BODY_TOO_LONG'		=> '문장 본문이 전체 이메일 수집하기에 너무 깁니다. 줄여서 정돈하십시오.',
	'ERR_INI_ZLIB'			=> '임시로 Zlib 압축을 중지할수 없습니다. 테스트 설정이 실패할수도 있습니다.',
	'ERR_MAILBOX_FAIL'		=> '메일 계정을 복구할수 없습니다.',
	'ERR_NO_IMAP'			=> '발견된 IMAP libraries이 없습니다. 수신이메일로 계속 진행하기전 이를 해결하십시오.',
	'ERR_NO_OPTS_SAVED'		=> '수신 이메일 계정과 저장된 최적의 조건이 없습니다. 설정을 재검토 하십시오',
	'ERR_TEST_MAILBOX'		=> '설정을 확인후 다시 시도해 주십시오.',
    'ERR_DELETE_FOLDER' => '폴더를 삭제할 수 없습니다',
    'ERR_UNSUBSCRIBE_FROM_FOLDER' => '삭제하기 전에 폴더에서 구독 취소를 할 수 없습니다.',

	'LBL_APPLY_OPTIMUMS'	=> '최적의 조적 적용',
	'LBL_ASSIGN_TO_USER'	=> '사용자에 지정',
	'LBL_AUTOREPLY_OPTIONS'	=> '자동 답장 선택항목',
	'LBL_AUTOREPLY'			=> '자동 답장 템플릿',
	'LBL_AUTOREPLY_HELP'	=> '발신자에 응답이 수신되었음을 통지하기위한 자동화된 응답을 선택하십시오.',
	'LBL_BASIC'				=> '메일 계정 정보',
	'LBL_CASE_MACRO'		=> '마크로 사례',
	'LBL_CASE_MACRO_DESC'	=> '분석되고 사례에 수신이메일을 링크하는데 사용될 마크로를 설정하십시오.',
	'LBL_CASE_MACRO_DESC2'	=> '값을 설정하되 %1을 유지하십시오.',
	'LBL_CERT_DESC'			=> '메일 서버의 보완 증명서의 확인을 반드시 필요합니다 - 본인 서명시 사용하지 마십시오.',
	'LBL_CERT'				=> '증명서 확인',
	'LBL_CLOSE_POPUP'		=> '창닫기',
	'LBL_CREATE_NEW_GROUP'	=> '저장할 신규 그룹 만들기',
	'LBL_CREATE_TEMPLATE'	=> '새로 만들기',
	'LBL_SUBSCRIBE_FOLDERS'	=> '폴더 가입',
	'LBL_DEFAULT_FROM_ADDR'	=> '초기설정',
	'LBL_DEFAULT_FROM_NAME'	=> '초기설정',
	'LBL_DELETE_SEEN'		=> '가져온후 읽은 이메일 삭제',
	'LBL_EDIT_TEMPLATE'		=> '편집하기',
	'LBL_EMAIL_OPTIONS'		=> '이메일 처리 선택항목',
	'LBL_EMAIL_BOUNCE_OPTIONS' => '반송처리 선택사항',
	'LBL_FILTER_DOMAIN_DESC'=> '자동 답장이 보내지지 않는 도메인 명시하십시오.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> '전체 수신 이메일을 위한 Sugar내 자동으로 생성된 이메일 기록을 선택하십시오.',
	'LBL_POSSIBLE_ACTION_DESC'		=> '신규사례 선택사항을 위한 그룹 폴더가 선택되어야 합니다.',
	'LBL_FILTER_DOMAIN'		=> '이 도메인에 자동 답장기능이 없습니다.',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '최적조건의 연결 변수를 찾고 있습니다.',
	'LBL_FIND_OPTIMUM_TITLE'=> '최적조건의 구성을 찾습니다.',
	'LBL_FIND_SSL_WARN'		=> 'SSL 테스트는 상당량의 시간이 소요될수 있으니 기다려 주십시오.',
	'LBL_FORCE_DESC'		=> '몇몇의 IMAP/POP3 서버는 특정 스위치를 필요로 합니다. 연결시 금지 스위치를 확인하십시오.(i.e., /notls)',
	'LBL_FORCE'				=> '금지력',
	'LBL_FOUND_MAILBOXES'	=> '다음 사용할수 없는 폴더를 발견했습니다. 선택하려면 하나를 클릭하십시오.',
	'LBL_FOUND_OPTIMUM_MSG'	=> '최적의 설정을 발견했습니다. 귀하의 메일 계정에 적용하려면 아래 버튼을 누르십시오.',
	'LBL_FROM_ADDR'			=> '발신 주소',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "이곳에 입력된 이메일 주소는 서비스 공급자에 의해 강요된 제한으로 발신자 주소칸에 나타나지 않을수도 있습니다. 이 상황에서는 발신 우편서버에서 정의된 이메일 주소가 사용됩니다.",
	'LBL_FROM_NAME_ADDR'	=> '발신자 이름/이메일',
	'LBL_FROM_NAME'			=> '발신자명',
	'LBL_GROUP_QUEUE'		=> '그룹에 배정',
    'LBL_HOME'              => '홈',
	'LBL_LIST_MAILBOX_TYPE'	=> '메일 계정 사용',
	'LBL_LIST_NAME'			=> '이름',
	'LBL_LIST_GLOBAL_PERSONAL'			=> '유형',
	'LBL_LIST_SERVER_URL'	=> '메일 서버',
	'LBL_LIST_STATUS'		=> '상태',
	'LBL_LOGIN'				=> '사용자명',
	'LBL_MAILBOX_DEFAULT'	=> '편지함',
	'LBL_MAILBOX_SSL_DESC'	=> '연결시 SSL 사용합니다. 작동하지 않으면 구성의 "--with-imap-ssl" 를 포함한 PHP 설정을 확인하십시오.',
	'LBL_MAILBOX_SSL'		=> 'SSL 사용',
	'LBL_MAILBOX_TYPE'		=> '가능한 액션',
	'LBL_DISTRIBUTION_METHOD' => '분배 방법',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => '신규 자동 답장 사례 템플릿',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => '이메일 발신자에 신규 사례생성을 통지하기위한 자동화된 응답을 선택합니다. 이메일은 마크로 사례설정에 붙여진 제목줄의 사례번호를 포함합니다. 이 응답은 첫 이메일이 수신자에 의해 수신시에만 보내집니다.',
	'LBL_MAILBOX'			=> '모니터되는 폴더',
	'LBL_TRASH_FOLDER'		=> '휴지통',
	'LBL_GET_TRASH_FOLDER'	=> '휴지통 만들기',
	'LBL_SENT_FOLDER'		=> '발신 폴더',
	'LBL_GET_SENT_FOLDER'	=> '발신 폴더 만들기',
	'LBL_SELECT'				=> '선택하기',
	'LBL_MARK_READ_DESC'	=> '가져온 메일 서버의 읽은 메세지 표시;삭제하지 마십시오.',
	'LBL_MARK_READ_NO'		=> '가져온후 삭제한 이메일 표시',
	'LBL_MARK_READ_YES'		=> '가져온후 서버에 남은 이메일',
	'LBL_MARK_READ'			=> '서버에 메세지 남기기',
	'LBL_MAX_AUTO_REPLIES'	=> '자동 응답 번호',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> '24시간동안 고유 이메일 주소로 전송된 자동응답 최대 허용번호 설정',
	'LBL_PERSONAL_MODULE_NAME' => '개인 메일 계정',
	'LBL_PERSONAL_MODULE_NAME_SINGULAR' => '개인 메일 계정',
	'LBL_CREATE_CASE'      => '이메일로부터 신규 사례 추가하기',
	'LBL_CREATE_CASE_HELP'  => '수신 이메일로부터의 Sugar내 자동 신규사례 기록 선택하기',
	'LBL_MODULE_NAME'		=> '그룹 메일 계정',
	'LBL_MODULE_NAME_SINGULAR' => '그룹 메일 계정',
	'LBL_BOUNCE_MODULE_NAME' => '반송 처리 편지함',
	'LBL_MODULE_TITLE'		=> '수신 이메일',
	'LBL_NAME'				=> '이름',
    'LBL_NONE'              => '없음',
	'LBL_NO_OPTIMUMS'		=> '최적의 조건을 찾을수 없습니다. 설정확인후 다시 시도하십시오.',
	'LBL_ONLY_SINCE_DESC'	=> 'POP3사용시 PHP는 신규/읽지 않은 메세지에 필터사용할수 없습니다. 이 표시는 메일 계정이 마지막으로 등록된 후부터의 메세지의 확인 요청을 허용합니다. 이는 귀하의 메일 계정이 IMAP를 지원하지 않는다면 수행능력을 현저하게 향상시킵니다.',
	'LBL_ONLY_SINCE_NO'		=> '아니오. 메일 서버의 전체 이메일을 확인하십시오.',
	'LBL_ONLY_SINCE_YES'	=> '네',
	'LBL_ONLY_SINCE'		=> '마지막 확인 이후만 가져오기',
	'LBL_OUTBOUND_SERVER'	=> '발신메일 서버',
	'LBL_PASSWORD_CHECK'	=> '비밀번호 확인',
	'LBL_PASSWORD'			=> '비밀번호:',
	'LBL_POP3_SUCCESS'		=> '귀하의 POP3테스트 연결이 성공하였습니다.',
	'LBL_POPUP_FAILURE'		=> '테스트 연결이 실패했습니다. 오류는 아래에 나타납니다.',
	'LBL_POPUP_SUCCESS'		=> '테스트 연결이 성공했습니다. 설정이 작동중입니다.',
	'LBL_POPUP_TITLE'		=> '테스트 설정',
	'LBL_GETTING_FOLDERS_LIST' 		=> '폴더 목록 만들기',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> '가입 폴더 선택하기',
	'LBL_SELECT_TRASH_FOLDERS' 		=> '휴지통 선택하기',
	'LBL_SELECT_SENT_FOLDERS' 		=> '전송 폴더 선택하기',
	'LBL_DELETED_FOLDERS_LIST' 		=> '다음 폴더는 존재하지 않거나 서버에서 삭제되었습니다.',
	'LBL_PORT'				=> '메일 서버포트',
	'LBL_QUEUE'				=> '대기중 메일 계정',
	'LBL_REPLY_NAME_ADDR'	=> '답장 이름/이메일',
	'LBL_REPLY_TO_NAME'		=> '답장할 이름',
	'LBL_REPLY_TO_ADDR'		=> '답장할 주소',
	'LBL_SAME_AS_ABOVE'		=> '발신자명/주소 사용중입니다.',
	'LBL_SAVE_RAW'			=> '원 출처 저장하기',
	'LBL_SAVE_RAW_DESC_1'	=> '각각의 가져온 이메일의 원 출처를 유지하려면 &#39;네&#39;를 선택하십시오.',
	'LBL_SAVE_RAW_DESC_2'	=> '대용량 첨부는 일반적으로 실패하거나 부정확하게 구성된 데이타베이스를 유발할수 있습니다.',
	'LBL_SERVER_OPTIONS'	=> '고급 설정',
	'LBL_SERVER_TYPE'		=> '메일 서버 통신규약/접속순서',
	'LBL_SERVER_URL'		=> '메일 서버 주소',
	'LBL_SSL_DESC'			=> '만약 귀하의 메일 서버가 보안 소켓을 지원한다면 이 작동은 이메일 가져올때 SSL연결을 강요합니다.',
	'LBL_ASSIGN_TO_TEAM_DESC' => '선택된 팀이 메일 계정에 접속하였습니다.',
	'LBL_SSL'				=> 'SSL 사용',
	'LBL_STATUS'			=> '상태',
	'LBL_SYSTEM_DEFAULT'	=> '시스템 초기설정',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> '테스트',
	'LBL_TEST_SETTINGS'		=> '테스트 설정',
	'LBL_TEST_SUCCESSFUL'	=> '연결이 성공적으로 완료되었습니다.',
	'LBL_TEST_WAIT_MESSAGE'	=> '잠시만 기다려 주세요...',
	'LBL_TLS_DESC'			=> '베일 서버에 연결시 지면배치 보안 운송을 사용하십시오.- 메일 서버가 이 통신 규약을 지원할때만 사용하십시오.',
	'LBL_TLS'				=> 'TLS 사용하십시오.',
	'LBL_WARN_IMAP_TITLE'	=> '수신 이메일 중지',
	'LBL_WARN_IMAP'			=> '경고',
	'LBL_WARN_NO_IMAP'		=> '수신 이메일은 PHP모듈과 작동/편집된 IMAP c-client libraries 없이 기능할수 없습니다. 이 쟁점의 해결을 위해서는 관리자에 문의하십시오.',

	'LNK_CREATE_GROUP'		=> '신규 그룹 만들기',
	'LNK_LIST_CREATE_NEW_GROUP'	 => '신규 그룹 메일 계정 만들기',
	'LNK_LIST_CREATE_NEW_BOUNCE' => '신규 반송처리 계정 만들기',
	'LNK_LIST_MAILBOXES'	=> '전체 메일 계정',
	'LNK_LIST_QUEUES'		=> '전체 문의사항',
	'LNK_LIST_SCHEDULER'	=> '일정 관리',
	'LNK_LIST_TEST_IMPORT'	=> '테스트 이메일 가져오기',
	'LNK_NEW_QUEUES'		=> '신규 문의사항 만들기',
	'LNK_SEED_QUEUES'		=> '팀의 대기번호 배정',
	'LBL_GROUPFOLDER_ID'	=> '그룹 폴더 ID',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => '그룹 폴더에 지정',
    'LBL_STATUS_ACTIVE'     => '작동중',
    'LBL_STATUS_INACTIVE'   => '중지',
    'LBL_IS_PERSONAL' => '개인',
    'LBL_IS_GROUP' => '그룹',
    'LBL_ENABLE_AUTO_IMPORT' => '이메일 자동으로 가져오기',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => '경고:귀하의 자동 가져오기 설정을 수정중이며 이에 따라 데이타를 잃을수도 있습니다.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => '경고: 자동으로 사례가 만들어질따는 자동 가져오기가 반드시 작동해야 합니다.',
	'LBL_EDIT_LAYOUT' => '지면 배치 편집하기' /*for 508 compliance fix*/,
    'LBL_AUTHORIZED_ACCOUNT' => '이메일 주소:',
    'LBL_EMAIL_PROVIDER' => '이메일 공급자',
    'LBL_AUTH_STATUS' => '승인 상태',
);
