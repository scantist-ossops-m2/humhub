<?php

return [
    'Base DN' => '베이스 DN',
    'Enable LDAP Support' => 'LDAP 지원 활성화',
    'Encryption' => '암호화',
    'Fetch/Update Users Automatically' => '자동적으로 유저 가져오기/업데이트',
    'Hostname' => '호스트 이름',
    'LDAP' => 'LDAP',
    'Login Filter' => '로그인 필터',
    'Password' => 'Password',
    'Port' => '포트',
    'User Filter' => '유저 필터',
    'Username' => '유저네임',
    'Username Attribute' => '유저네임 속성',
    'Defines the filter to apply, when login is attempted. %s replaces the username in the login action. Example: &quot;(sAMAccountName=%s)&quot; or &quot;(uid=%s)&quot;' => '',
    'E-Mail Address Attribute' => '',
    'ID Attribute' => '',
    'Ignored LDAP entries' => '',
    'LDAP Attribute for E-Mail Address. Default: &quot;mail&quot;' => '',
    'LDAP Attribute for Username. Example: &quot;uid&quot; or &quot;sAMAccountName&quot;' => '',
    'Limit access to users meeting this criteria. Example: &quot;(objectClass=posixAccount)&quot; or &quot;(&(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))&quot;' => '',
    'Not changeable LDAP attribute to unambiguously identify the user in the directory. If empty the user will be determined automatically by e-mail address or username. Examples: objectguid (ActiveDirectory) or uidNumber (OpenLDAP)' => '',
    'One DN per line which should not be imported automatically.' => '',
    'Specify your LDAP-backend used to fetch user accounts.' => '',
    'Status: Error! (Message: {message})' => '',
    'Status: OK! ({userCount} Users)' => '',
    'Status: Warning! (No users found using the ldap user filter!)' => '',
    'The default base DN used for searching for accounts.' => '',
    'The default credentials password (used only with username above).' => '',
    'The default credentials username. Some servers require that this be in DN form. This must be given in DN form if the LDAP server requires a DN to bind and binding should be possible with simple usernames.' => '',
];
