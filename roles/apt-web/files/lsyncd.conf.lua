settings = {
  logfile    = "/var/log/lsyncd.log",
  statusFile = "/var/log/lsyncd.status",
  nodaemon   = false,
}

s3sync = {
  maxProcesses = 6,
  onStartup = "aws s3 sync ^source ^target",
  onCreate  = "[ -f ^source^pathname ] && aws s3 cp ^source^pathname ^target^pathname || true",
  onModify  = "[ -f ^source^pathname ] && aws s3 cp ^source^pathname ^target^pathname || true",
  onDelete  = "[ -f ^source^pathname ] && aws s3 rm ^target^pathname || true",
}

sync{
  s3sync,
  source = "/var/www/wp-static",
  target = "s3://www.pets-video.com",
}
