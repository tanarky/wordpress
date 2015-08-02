環境構築
-------------------------------

ssh-config $(USERNAME)は自分のものに置き換える

::

   Host wp-dev01
     HostName 192.168.34.10
     StrictHostKeyChecking no
     UserKnownHostsFile /dev/null
   
   Host wp-*
     User $(USERNAME)
   
   Host *
     ForwardAgent yes

VM設定

::

   git clone git@github.com:tanarky/wordpress.git

   # vagrant起動
   vagrant up

   # 初回実行
   ansible-playbook -i hosts/vagrant development.yml --user=vagrant --private-key=~/.vagrant.d/insecure_private_key

   # 2回目以降
   ansible-playbook -i hosts/vagrant development.yml --ask-sudo-pass

ssh 接続して開発する

::

   ssh wp-dev01


Basilico
--------------------------------

Theme color

http://www.colourlovers.com/palette/582195/Chocolate_Creams
