# Kubernetes - Pods and Services

## Pre-requisites

You need to have a Kubernetes service, like minikube or Docker Desktop (locally), AKS, EKS or GKE.

## Running

Before all, clone this repository and navigate to the directory where it was cloned

### Applying Pods

```bash
kubectl apply -f ./pods
```

### Applying Services

```bash
kubectl apply -f ./services
```

## Result

**Note**: I'm using **minikube**

### NGINX

To get URL we need to run the command:

```bash
minikube service nginx-service --url
```

Now we can access the received URL.

### MySQL

To get IP address of Pod, you need to run the command:

```bash
kubectl get all
```

#### Accessing the MySQL by NGINX command line

```bash
# Access the command line of NGINX Pod
kubectl exec -it pod/nginx-pod -- bash

# Install the MySQL Client
sudo apt update && apt install -y default-mysql-client

# Access the MySQL
mysql -h <MYSQL_POD_IP_ADDRESS> -u root -p
```
