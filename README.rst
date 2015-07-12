1. 環境構築
-------------------------------

::

   git clone git@github.com:tanarky/wordpress.git

   # vagrant起動
   vagrant up

   # 初回実行
   ansible-playbook -i hosts/vagrant development.yml --user=vagrant --private-key=~/.vagrant.d/insecure_private_key
   ## TODO: root/vagrant のauthorized_keysを消す

   # 2回目以降($USERは自分のユーザ、ssh-configに記載あれば指定の必要なし)
   ansible-playbook -i hosts/vagrant development.yml --ask-sudo-pass --user=$USER 

3. VM接続先設定
-------------------------

$HOME/.ssh/config 例

$(USERNAME)は自分のものに置き換える

::

   Host wp-dev01
     HostName 192.168.34.10
     StrictHostKeyChecking no
     UserKnownHostsFile /dev/null
   
   Host wp-*
     User $(USERNAME)
   
   Host *
     ForwardAgent yes

Macの /etc/hosts に以下の1行追加

::

   192.168.34.10  dev.mywp.com
   
上記設定をした上で

::

   ssh wp-dev01
