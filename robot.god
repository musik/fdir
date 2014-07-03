God.watch do |w|
  w.name = "hcw"
  w.start = "php /dat/www/hongchawu/current/robot.php > /dat/www/hongchawu/current/robot.log"
  w.keepalive
end
