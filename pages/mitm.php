<!DOCTYPE html>
<html>
<head>
    <h1>Man-in-The-Middle</h1>
<style>
h1{  
    text-align: center; 
    color: white; 
    font-family:system-ui;


}
h3{  
    text-align: left;  
    color: white; 
    font-family:system-ui;

}
h2{  
    text-align: left;  
    color:black; 
    font-family:system-ui;

}
html {
  background-color: #27613b;
}

.button5 {
  background-color: grey;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
.button {
    border: none;
  color: white;
  padding: 30px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 100px 50px;
  transition-duration: 0.2s;
  cursor: pointer;
  margin: 40px;
    width: 25%;
    padding-top:25px;
    top: 50%;
    left: 50%;
    margin-top: 40px ;
    margin-left: 880px ;

   
  
}
</style>
</head>
<body>

<h2>How do I know I am under DDoS attack?</h2>

<h3>If a site is sluggish, does that mean it is being DDoSed? If it is generating error codes in the 500s (error code 500, 504, 505…), is it being attacked? Not necessarily, but it might. 

Sometimes, DDoS attacks are obvious. Most attackers are not altruistic (i.e., they’re motivated by money), and DDoS extortion is common. So, when your site goes down and then you get a ransom demand (usually payable in Bitcoin), it’s clear what is happening.

Other attacks won’t be as obvious, but you can still figure out the most likely explanation. For example, if there is a nation that has a grudge against your country, and your site is being overwhelmed with traffic from IP addresses within that other nation, then this is probably a politically-motivated DDoS.

It’s also possible to be involved in a DDoS, but not as the victim. The D in DDoS stands for “Distributed,” because many computers are used to attack another computer system. The owners of these “slaved” systems might not know that they are being used in the attack. Nevertheless, there are some telltale signs that can suggest a computer has been hijacked (slow performance, high CPU usage, high outgoing network traffic, etc.). If you suspect your system is being used in a DDoS attack, reach out to a company that can analyze your network and detect if there was an intrusion.</h3> 

<h2>I am under a DDoS attack what to do?</h2>
<h3>
If you’ve established that you are currently under DDoS attack, there are several possible solutions that are commonly attempted. Here they are, in order of increasing effectiveness.

1.Configure a server-side firewall rate limit (IPTABLES or MS-Windows firewall). This will block the attack, but it may compromise the server’s network access. It also will not prevent the incoming Internet pipe from being saturated by the attack traffic, so your site might still become unavailable to web users, even if the server itself remains responsive.
2.Limit request rates and number in the web-server configuration. As with the first option, this will not protect the incoming pipe. Also, only the simplest forms of DDoS will be filtered; attackers who rotate IPs or use other obfuscating tactics can usually bypass this form of protection.
3.Add new servers to the farm to distribute the load. This is expensive, and it takes a long time. It’s also addressing the wrong problem; the DDoS is not being caused by insufficient server capacity, the problem is that hostile traffic is being allowed into the network.
4.Change the DNS record(s) for the domain(s). This can work, but usually only temporarily.
5.Put in an edge-network firewall and rate-limit the ingress path. This can work, but it can take a while to set up correctly. Meanwhile, the attack will be ongoing. Also, similar to option 2, many of these firewalls are not capable of detecting the more sophisticated forms of attack.
</h3>

<h2>What is the best way to stop a DDoS attack?</h2>

<h3>
The best way to stop an attack is to get help from the professionals.

Most companies that offer DDoS-protection solutions also offer immediate help for companies under attack. (Note that these are business solutions. Many DDoS attacks occur on gaming servers, and gamers sometimes contact these companies asking for help. If this is your situation, please be aware that these companies will probably not be able to help you.)

The fastest and easiest way to stop a DDoS is to use a cloud security solution. Reblaze deploys in minutes, and requires only a DNS change to activate. As the DNS change propagates, incoming traffic begins to get routed through Reblaze. As it does, DDoS and other attack traffic gets filtered out; only legitimate traffic passes through to the protected site. And as a cloud solution, Reblaze has access to near-infinite bandwidth, autoscaling to handle even massive DDoS assaults.

The attack stopped, what now?

If you stopped the attack on your own (without a cloud security solution), or if you simply waited until it stopped, then your short-term problem has been solved, but the long-term problem remains. The attack showed that your current security solution is inadequate. You should deploy a cloud web security solution that successfully protects you from DDoS attacks, as well as other forms of Internet threats.
</h3>
<div class="container">
<br>
<a href="http://localhost/umpbcas2/pages/recommendations.php"><button class="button button5">Back</button> </a>
</div>
</body>
</html>