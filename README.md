mantis-1.2.17_multiple_ldap
===========================

Mantis 1.2.17 - Multiple LDAP Servers Patch


Patch on mantis platform to enable it to log/create/update users against multiple ldap servers, through a select on login form o based on username regexp matching. 

This patch is a fork from a mantis 1.2.5 project. Ported the changes into Mantis 1.2.17 but didn't work so did my own ldap and authentication apis modifications. 

Forked from: http://www.mantisbt.org/bugs/view.php?id=9954


This patch adds a new login method (MIXED) that enables using several LDAP servers configured in config_default_inc.php under $g_auth_profiles variable. So $g_login_method in config_inc.php should be set to MIXED and your LDAP servers configuration added to $g_auth_profiles. 

Hope is useful to someone else. 
