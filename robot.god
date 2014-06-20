God.watch do |w|
  w.name = "hcw"
  w.start = "php robot.php > robot.log"
  w.keepalive
end
