<?php
$TRANSLATIONS = array(
"Cannot write into \"config\" directory!" => "\"config\" ディレクトリに書き込みができません！",
"This can usually be fixed by giving the webserver write access to the config directory" => "多くの場合、これはWEBサーバーに config ディレクトリへの書き込み権限を付与することで解決が可能です。",
"See %s" => "%s を閲覧",
"This can usually be fixed by %sgiving the webserver write access to the config directory%s." => "多くの場合、これは %sWEBサーバーに config ディレクトリへの書き込み権限を付与%s することで解決が可能です。",
"You are accessing the server from an untrusted domain." => "信頼されていないドメインからサーバーにアクセスしています。",
"Please contact your administrator. If you are an administrator of this instance, configure the \"trusted_domain\" setting in config/config.php. An example configuration is provided in config/config.sample.php." => "管理者に連絡してください。このサーバーの管理者の場合は、\"trusted_domain\" の設定を config/config.php に設定してください。config/config.sample.php にサンプルの設定方法が記載してあります。",
"Help" => "ヘルプ",
"Personal" => "個人",
"Settings" => "設定",
"Users" => "ユーザー",
"Admin" => "管理",
"Failed to upgrade \"%s\"." => "\"%s\" へのアップグレードに失敗しました。",
"App \\\"%s\\\" can't be installed because it is not compatible with this version of ownCloud." => "アプリ \\\"%s\\\" をインストールできません。現在の owncloud のバージョンと互換性がありません。",
"No app name specified" => "アプリ名が未指定",
"Unknown filetype" => "不明なファイルタイプ",
"Invalid image" => "無効な画像",
"web services under your control" => "管理下のウェブサービス",
"App directory already exists" => "アプリディレクトリはすでに存在します",
"Can't create app folder. Please fix permissions. %s" => "アプリフォルダーを作成できませんでした。%s のパーミッションを修正してください。",
"No source specified when installing app" => "アプリインストール時のソースが未指定",
"No href specified when installing app from http" => "アプリインストール時のhttpの URL が未指定",
"No path specified when installing app from local file" => "アプリインストール時のローカルファイルのパスが未指定",
"Archives of type %s are not supported" => "\"%s\"タイプのアーカイブ形式は未サポート",
"Failed to open archive when installing app" => "アプリをインストール中にアーカイブファイルを開けませんでした。",
"App does not provide an info.xml file" => "アプリにinfo.xmlファイルが入っていません",
"App can't be installed because of not allowed code in the App" => "アプリで許可されないコードが入っているのが原因でアプリがインストールできません",
"App can't be installed because it is not compatible with this version of ownCloud" => "アプリは、このバージョンのownCloudと互換性がないためインストールできません。",
"App can't be installed because it contains the <shipped>true</shipped> tag which is not allowed for non shipped apps" => "非shippedアプリには許可されない<shipped>true</shipped>タグが含まれているためにアプリをインストールできません。",
"App can't be installed because the version in info.xml/version is not the same as the version reported from the app store" => "info.xml/versionのバージョンがアプリストアのバージョンと合っていないため、アプリはインストールされません",
"Application is not enabled" => "アプリケーションは無効です",
"Authentication error" => "認証エラー",
"Token expired. Please reload page." => "トークンが無効になりました。ページを再読込してください。",
"Unknown user" => "不明なユーザー",
"%s enter the database username." => "%s のデータベースのユーザー名を入力してください。",
"%s enter the database name." => "%s のデータベース名を入力してください。",
"%s you may not use dots in the database name" => "%s ではデータベース名にドットを利用できないかもしれません。",
"MS SQL username and/or password not valid: %s" => "MS SQL サーバーのユーザー名/パスワードが正しくありません: %s",
"You need to enter either an existing account or the administrator." => "既存のアカウントもしくは管理者のどちらかを入力する必要があります。",
"MySQL/MariaDB username and/or password not valid" => "MySQL/MariaDB のユーザー名及び/またはパスワードが無効",
"DB Error: \"%s\"" => "DBエラー: \"%s\"",
"Offending command was: \"%s\"" => "違反コマンド: \"%s\"",
"MySQL/MariaDB user '%s'@'localhost' exists already." => "MySQL/MariaDB のユーザー '%s'@'localhost' はすでに存在します。",
"Drop this user from MySQL/MariaDB" => "MySQL/MariaDB からこのユーザーを削除",
"MySQL/MariaDB user '%s'@'%%' already exists" => "MySQL/MariaDB のユーザー '%s'@'%%' はすでに存在します",
"Drop this user from MySQL/MariaDB." => "MySQL/MariaDB からこのユーザーを削除。",
"Oracle connection could not be established" => "Oracleへの接続が確立できませんでした。",
"Oracle username and/or password not valid" => "Oracleのユーザー名もしくはパスワードは有効ではありません",
"Offending command was: \"%s\", name: %s, password: %s" => "違反コマンド: \"%s\"、名前: %s、パスワード: %s",
"PostgreSQL username and/or password not valid" => "PostgreSQLのユーザー名もしくはパスワードは有効ではありません",
"Set an admin username." => "管理者のユーザー名を設定",
"Set an admin password." => "管理者のパスワードを設定。",
"Your web server is not yet properly setup to allow files synchronization because the WebDAV interface seems to be broken." => "WebDAVインターフェースに問題があると思われるため、WEBサーバーはまだファイルの同期を許可するよう適切に設定されていません。",
"Please double check the <a href='%s'>installation guides</a>." => "<a href='%s'>インストールガイド</a>をよく確認してください。",
"%s shared »%s« with you" => "%sが あなたと »%s«を共有しました",
"Sharing %s failed, because the file does not exist" => "%s の共有に失敗しました。そのようなファイルは存在しないからです。",
"You are not allowed to share %s" => "%s を共有することを許可されていません。",
"Sharing %s failed, because the user %s is the item owner" => "%s の共有に失敗しました。ユーザー %s がアイテム所有者です。",
"Sharing %s failed, because the user %s does not exist" => "%s の共有に失敗しました。ユーザー %s が存在しません。",
"Sharing %s failed, because the user %s is not a member of any groups that %s is a member of" => "%s の共有に失敗しました。ユーザー %s はどのグループにも属していません。%s は、??のメンバーです。",
"Sharing %s failed, because this item is already shared with %s" => "%s の共有に失敗しました。このアイテムは既に %s で共有されています。",
"Sharing %s failed, because the group %s does not exist" => "%s の共有に失敗しました。グループ %s は存在しません。",
"Sharing %s failed, because %s is not a member of the group %s" => "%s の共有に失敗しました。%s は、グループ %s のメンバーではありません。",
"You need to provide a password to create a public link, only protected links are allowed" => "公開用リンクの作成にはパスワードの設定が必要です",
"Sharing %s failed, because sharing with links is not allowed" => "%s の共有に失敗しました。リンクでの共有は許可されていません。",
"Share type %s is not valid for %s" => "%s の共有方法は、%s には適用できません。",
"Setting permissions for %s failed, because the permissions exceed permissions granted to %s" => "%s の権限設定に失敗しました。%s に許可されている権限を越えています。",
"Setting permissions for %s failed, because the item was not found" => "%s の権限設定に失敗しました。アイテムが存在しません。",
"Can not set expire date. Shares can not expire later then %s after they where shared" => "有効期限を設定できません。共有開始から %s 以降に有効期限を設定することはできません。",
"Can not set expire date. Expire date is in the past" => "有効期限を設定できません。有効期限が過去を示しています。",
"Sharing backend %s must implement the interface OCP\\Share_Backend" => "%s のバックエンドの共有には、OCP\\Share_Backend　インターフェースを実装しなければなりません。",
"Sharing backend %s not found" => "共有バックエンド %s が見つかりません",
"Sharing backend for %s not found" => "%s のための共有バックエンドが見つかりません",
"Sharing %s failed, because the user %s is the original sharer" => "%s の共有に失敗しました。ユーザー %s が元々の共有者であるからです。",
"Sharing %s failed, because the permissions exceed permissions granted to %s" => "%s の共有に失敗しました。%s に付与されている許可を超えているからです。",
"Sharing %s failed, because resharing is not allowed" => "%s の共有に失敗しました。再共有が許されていないからです。",
"Sharing %s failed, because the sharing backend for %s could not find its source" => "%s の共有に失敗しました。%s のバックエンド共有に必要なソースが見つかりませんでした。",
"Sharing %s failed, because the file could not be found in the file cache" => "%s の共有に失敗しました。ファイルキャッシュにファイルがありませんでした。",
"Could not find category \"%s\"" => "カテゴリ \"%s\" が見つかりませんでした",
"seconds ago" => "数秒前",
"_%n minute ago_::_%n minutes ago_" => array("%n 分前"),
"_%n hour ago_::_%n hours ago_" => array("%n 時間前"),
"today" => "今日",
"yesterday" => "1日前",
"_%n day go_::_%n days ago_" => array("%n日前"),
"last month" => "1ヶ月前",
"_%n month ago_::_%n months ago_" => array("%nヶ月前"),
"last year" => "1年前",
"years ago" => "年前",
"Only the following characters are allowed in a username: \"a-z\", \"A-Z\", \"0-9\", and \"_.@-\"" => "ユーザー名で利用できる文字列は、次のものです： \"a-z\", \"A-Z\", \"0-9\", and \"_.@-\"",
"A valid username must be provided" => "有効なユーザー名を指定する必要があります",
"A valid password must be provided" => "有効なパスワードを指定する必要があります",
"The username is already being used" => "ユーザー名はすでに使われています",
"No database drivers (sqlite, mysql, or postgresql) installed." => "データベースドライバー (sqlite, mysql, postgresql) がインストールされていません。",
"Permissions can usually be fixed by %sgiving the webserver write access to the root directory%s." => "多くの場合、パーミッションは %sWEBサーバーにルートディレクトリへの書き込み権限を付与%s することで解決が可能です。",
"Cannot write into \"config\" directory" => "\"config\" ディレクトリに書き込みができません",
"Cannot write into \"apps\" directory" => "\"apps\" ディレクトリに書き込みができません",
"This can usually be fixed by %sgiving the webserver write access to the apps directory%s or disabling the appstore in the config file." => "多くの場合、これは %sWEBサーバーに apps ディレクトリへの書き込み権限を付与%s するか、設定ファイルでアプリストアを無効化することで解決が可能です。",
"Cannot create \"data\" directory (%s)" => "\"data\" ディレクトリ (%s) を作成できません",
"This can usually be fixed by <a href=\"%s\" target=\"_blank\">giving the webserver write access to the root directory</a>." => "多くの場合、これは<a href=\"%s\" target=\"_blank\">WEBサーバーにルートディレクトリへの書き込み権限を付与</a>することで解決が可能です。",
"Setting locale to %s failed" => "ロケールを %s に設定できませんでした",
"Please install one of theses locales on your system and restart your webserver." => "これらのロケールのいずれかをシステムにインストールし、WEBサーバーを再起動してください。",
"Please ask your server administrator to install the module." => "サーバー管理者にモジュールのインストールを依頼してください。",
"PHP module %s not installed." => "PHP のモジュール %s がインストールされていません。",
"PHP %s or higher is required." => "PHP %s 以上が必要です。",
"Please ask your server administrator to update PHP to the latest version. Your PHP version is no longer supported by ownCloud and the PHP community." => "PHPを最新バージョンに更新するようサーバー管理者に依頼してください。現在のPHPのバージョンは、ownCloud および PHP コミュニティでサポートされていません。",
"PHP Safe Mode is enabled. ownCloud requires that it is disabled to work properly." => "PHPセーフモードは有効です。ownCloud を適切に動作させるには無効化する必要があります。",
"PHP Safe Mode is a deprecated and mostly useless setting that should be disabled. Please ask your server administrator to disable it in php.ini or in your webserver config." => "PHPセーフモードは多くの場合において役に立たない設定のため、無効化すべきです。サーバー管理者に php.ini もしくはWEBサーバー設定で無効化するよう依頼してください。",
"Magic Quotes is enabled. ownCloud requires that it is disabled to work properly." => "マジッククォートは有効です。ownCloud を適切に動作させるには無効化する必要があります。",
"Magic Quotes is a deprecated and mostly useless setting that should be disabled. Please ask your server administrator to disable it in php.ini or in your webserver config." => "マジッククォートは多くの場合において役に立たない設定のため、無効化すべきです。サーバー管理者に php.ini もしくはWEBサーバー設定で無効化するよう依頼してください。",
"PHP modules have been installed, but they are still listed as missing?" => "PHP モジュールはインストールされていますが、まだ一覧に表示されていますか？",
"Please ask your server administrator to restart the web server." => "サーバー管理者にWEBサーバーを再起動するよう依頼してください。",
"PostgreSQL >= 9 required" => "PostgreSQL >= 9 が必要です",
"Please upgrade your database version" => "新しいバージョンのデータベースにアップグレードしてください",
"Error occurred while checking PostgreSQL version" => "PostgreSQL のバージョンチェック中にエラーが発生しました",
"Please make sure you have PostgreSQL >= 9 or check the logs for more information about the error" => "PostgreSQL >= 9 がインストールされているかどうか確認してください。もしくは、ログからエラーに関する詳細な情報を確認してください。",
"Please change the permissions to 0770 so that the directory cannot be listed by other users." => "ディレクトリが他のユーザーから見えないように、パーミッションを 0770 に変更してください。",
"Data directory (%s) is readable by other users" => "データディレクトリ (%s) は他のユーザーも閲覧することができます",
"Data directory (%s) is invalid" => "データディレクトリ (%s) は無効です",
"Please check that the data directory contains a file \".ocdata\" in its root." => "データディレクトリに \".ocdata\" ファイルが含まれていることを確認してください。",
"Could not obtain lock type %d on \"%s\"." => "\"%s\" で %d タイプのロックを取得できませんでした。"
);
$PLURAL_FORMS = "nplurals=1; plural=0;";
