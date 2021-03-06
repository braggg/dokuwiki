<?php
/**
 * Esperanto language file
 *
 */
$lang['server']                = 'Via LDAP-servilo. Aŭ servila nomo (<code>localhost</code>) aŭ plene detala URL (<code>ldap://servilo.lando:389</code>)';
$lang['port']                  = 'LDAP-servila pordego, se vi supre ne indikis la plenan URL';
$lang['usertree']              = 'Kie trovi uzantajn kontojn, ekz. <code>ou=Personoj, dc=servilo, dc=lando</code>';
$lang['grouptree']             = 'Kie trovi uzantogrupojn, ekz. <code>ou=Grupo, dc=servilo, dc=lando</code>';
$lang['userfilter']            = 'LDAP-filtrilo por serĉi uzantokontojn, ekz. <code>(&amp;(uid=%{user})(objectClass=posixAccount))</code>';
$lang['groupfilter']           = 'LDAP-filtrilo por serĉi grupojn, ekz. <code>(&amp;(objectClass=posixGroup)(|(gidNumber=%{gid})(memberUID=%{user})))</code>';
$lang['version']               = 'La uzenda protokolversio. Eble necesas indiki <code>3</code>';
$lang['starttls']              = 'Ĉu uzi TLS-konektojn?';
$lang['referrals']             = 'Ĉu sekvi referencojn?';
$lang['binddn']                = 'DN de opcie bindita uzanto, se anonima bindado ne sufiĉas, ekz. <code>cn=admin, dc=mia, dc=hejmo</code>';
$lang['bindpw']                = 'Pasvorto de tiu uzanto';
$lang['userscope']             = 'Limigi serĉospacon de uzantaj serĉoj';
$lang['groupscope']            = 'Limigi serĉospacon por grupaj serĉoj';
$lang['groupkey']              = 'Grupa membreco de iu uzanta atributo (anstataŭ standardaj AD-grupoj), ekz. grupo de departemento aŭ telefonnumero';
$lang['debug']                 = 'Ĉu montri aldonajn erarinformojn?';
