settings = {
  logfile    = "/var/log/lsyncd.log",
  statusFile = "/var/log/lsyncd.status",
  nodaemon   = false,
}

s3sync = {
  maxProcesses = 6,
  onStartup = "s3cmd -c /etc/s3cmd.conf -P -r --delete-removed sync ^source ^target/",
  onCreate  = "[ -f ^source^pathname ] && s3cmd -c /etc/s3cmd.conf -P put ^source^pathname  ^target^pathname || true",
  onModify  = "[ -f ^source^pathname ] && s3cmd -c /etc/s3cmd.conf -P put ^source^pathname  ^target^pathname || true",
  onDelete  = "[ -f ^source^pathname ] && s3cmd -c /etc/s3cmd.conf    del                   ^target^pathname || true",
}

sync{
  s3sync,
  source = "/var/www/wp-static",
  target = "s3://wp.tnky.pw",
}
