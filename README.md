# PHP CRUD RDS

A small PHP application used to demonstrate a connection with an Amazon RDS MySQL database. AWS CodeDeploy is used to deploy this application to an EC2 instance runnning Apache.

The following AWS tutorial was used a starting point for this application:
<https://docs.aws.amazon.com/AmazonRDS/latest/UserGuide/TUT_WebAppWithRDS.html>

## Summary

The deployment and maintenance of application code is done through the use of CodeDeploy and the method for triggering the CodeDeploy job is done through the use of CodePipeline. This repository uses two branches, master and test. The master branch corresponds to production code and deployments and the test branch corresponds to test code and deployments. Each of these branches is linked to their own EC2 instance, CodeDeploy job & CodePipeline configuration within AWS. The CodeDeploy and CodePipeline configuration is defined in the CloudFormation template [ec2-web-server.yml](https://github.com/jason4151/cloudformation/blob/master/ec2-web-server.yml).

The CodePipeline configuration is split into a source stage and deploy stage. The source stage connects CodePipeline to GitHub and is responsible for staying in sync with its assigned repository branch. Once CodePipeline is triggered due to a commit to a repository branch, the Deploy stage kicks in and triggers a CodeDeploy job on the respective EC2 instance.
