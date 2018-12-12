Minds

Minds is an open-source, encrypted and reward-based social networking platform. https://minds.com
Repositories

Minds is split into multiple repositories:

    Engine - Backend code & APIs
    Front - Client side Angular2 web app
    Sockets - WebSocket server for real-time communication
    Mobile - React Native mobile apps

Development System Requirements

      - 10GB RAM

      - 100GB Disk space

      -  Docker Compose
      - git



## Introduction
An open-source, encrypted and reward-based social networking platform. https://minds.com | https://minds.org

## Security reports
Please report all security issues to security@minds.com.

## License

AGPLv3. Please see the license file of each repository.

## Repositories

Minds is split into multiple components:

- [Engine](https://github.com/Minds/engine) - Backend code & APIs
- [Front](https://github.com/Minds/front) - Client side Angular2 web app
- [Sockets](https://github.com/Minds/sockets) - WebSocket server for real-time communication (WIP)
- [Docs](https://github.com/Minds/docs) - Documentation of public and private apis (WIP)

Please also see:
- [Mobile](https://github.com/Minds/mobile) - WebSocket server for real-time communication

Plugins will eventually be migrated to their own repositories.

## Download and Provisioning

- Git
- Docker


## Installing and Building Developer version

We used Linux Mint on VirtualBox to test and create this install guide.

First we need to install a few things like docker. To do this on Mint or Ubuntu using the application store is the easiest way, just search docker and install the following packages;

Docker

Docker-compose

Docker-containerd

Docker-registry

Docker.io

Now we can install git, to do this open the terminal {CTRL + ALT +T} and type;

sudo apt-get install git

Now we need to install Minds, do not use sudo here

git clone https://github.com/Minds/minds.git

Once this is done we need to open the file for Minds in the same terminal.

cd minds

Now we can follow Minds install instructions;

Fist in order to install the front and engine repositories run;

sh init.sh

Next;

sudo docker-compose up -d nginx

Next;

sudo docker-compose up installer

sudo docker-compose up front-build

Alright now we need to set-up our hosts, to do this we are going to run;

sudoedit /etc/host

We are going to paste and save the local host

http://localhost:8080

Once saved open the link in your browser.

Troubleshooting

Cassandra Doesn’t run;

Try;

sudo docker-compose up front-build

Or run;

sudo docker-compose up cassandra

---------------------------------

Production System Requirements

At this time it is not advisable to run Minds in production, however it is possible so long as you are aware of the risks.

    3 Cassandra Nodes (Min 30gb RAM, 1TB SSD, 8 CPU)
    1 ElasticSearch Node (Min 16GB RAM, 250GB SSD, 8 CPU) #2 nodes are recommended for failover
    1 Docker Machine (Min 60gb RAM, 50GB SSD, 32 CPU)

Contributing

If you'd like to contribute to the Minds project, check out the Contribution section of Minds.org or head right over to the Minds Open Source Community. If you've found or fixed a bug, let us know in the Minds Help and Support Group!
Security reports

Please report all security issues to security@minds.com.
License

AGPLv3. Please see the license file of each repository.
Credits

PHP, Cassandra, Angular2, Nginx, Ubuntu, OpenSSL, RabbitMQ, Elasticsearch, Cordova, Neo4j, Elgg, Node.js, MongoDB, Redis, WebRTC, Socket.io, TinyMCE, Ionic, Requirejs, OAuth, Apigen, Braintree. If any are missing please feel free to add.

Copyright Minds 2012 - 2018

Copyright for portions of Minds are held by Elgg, 2013 as part of the Elgg project. All other copyright for Minds is held by Minds, Inc.
