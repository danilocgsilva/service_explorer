# Service Explorer
Helps to store and manage all services from a network

An web application may need to be connected to several external services to work. A single web application may need connection to one or several resources of some types:

* Database (most obvious and basic)
* Email service (rather obvious too)
* Redis database
* LDAP
* Some WSDL service
* FTP
* etc, etc

For each service, ou may also have several environments to which you may need depending on context. For example, there can be the situation where you have a database for development, for quality assurance and for homologation. Thus, a single service may have three others endpoints to connect.

Manage applications in its environment may also be hard and tricky. If the application is connected to a wrong endpoint, it leads to kinds of problem very hard to discover.

The Service Explorer have the intent to be a management tool to keep track of those services.

This solution is composed of:

* A web application that will serve as repository for all the information of the services and its endpoints. YOU MAY STORE ALOT OF SENSIVE INFORMATION, SO TAKE FURTHER STEPS TO HARDEN THE SERVER SECURITY FOR THE APPLICATION AND ITS DATABASES.

* A python application that will keep track of local development environment.

## List of files:

* LICENCE: Obvious, the LICENCE of the project.
* web_application: The web application intended to be installed in a serve to store endpoints informations.
* local_checker: A script to run in the machine where application is installed to keep track to which the local development machine is connected to. It can serve both to be installed in the development machine or in the server machine.