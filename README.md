<h1 align="center">🚀 PHP Laravel DevOps Deployment</h1>
<h3 align="center">AWS EC2 • Docker • Nginx • GitHub Actions CI/CD Pipeline</h3>

---

## 📌 Project Overview
This project demonstrates a **production-style DevOps deployment** of a Laravel application using:

- GitHub Actions (CI/CD Pipeline)
- AWS EC2 (Amazon Linux Free Tier)
- Docker & Docker Compose
- Nginx Reverse Proxy
- Laravel (PHP-FPM Container)

Deployment is **fully automated** — no manual SSH steps required after setup.

---

## 🧰 Tech Stack
| Component | Technology |
|----------|--------------|
| Backend Framework | Laravel (PHP-FPM) |
| Cloud Server | AWS EC2 (Amazon Linux) |
| Containerization | Docker & Docker Compose |
| Web Server | Nginx |
| CI/CD Automation | GitHub Actions |
| SSL/DNS (Optional) | Cloudflare + Let's Encrypt |

---

## 🏗️ Architecture

Developer → GitHub → CI/CD Workflow → EC2 → Docker Containers → Nginx → Live Application


- Laravel runs in a PHP-FPM container
- Nginx handles reverse proxy routing
- Docker Compose manages services
- GitHub Actions deploys on every push to `main`

---

## 🔁 CI/CD Pipeline Flow
1. Developer pushes code → GitHub triggers CI/CD
2. SSH into EC2 via private key (automated)
3. Pull latest code & rebuild Docker containers
4. Application goes live instantly 🚀

---

## ⚙️ GitHub Actions Workflow
`.github/workflows/deploy.yml`

```yaml
name: Deploy Laravel to AWS EC2 (GitHub Actions)

on:
  push:
    branches: [ "main" ]

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
      - name: Checkout Code
        uses: actions/checkout@v3

      - name: Deploy to AWS EC2 using SSH
        uses: appleboy/ssh-action@v0.1.8
        with:
          host: ${{ secrets.SSH_HOST }}
          username: ${{ secrets.SSH_USER }}
          key: ${{ secrets.SSH_KEY }}
          script: |
            cd /var/www/project
            git pull origin main
            docker compose down
            docker compose up -d --build


🔐 GitHub Secrets Used
Secret Name	  Value
SSH_HOST	  EC2 Public IP Address
SSH_USER	  ubuntu
SSH_KEY       Private SSH Key (id_ed25519)

📸 CI/CD & Deployment Proof (Screenshots)

Create a folder named: /screenshots in your repo and add these images

## 📸 CI/CD Deployment Proof

### 🟢 Pipeline Success
![GitHub Actions Pipeline](screenshots/github-actions-success.png)

### 🚀 Deployment Log
![Deploy Job Logs](screenshots/deploy-job-logs.png)

### 🐳 Docker Containers Running
![Docker PS](screenshots/docker-ps.png)

### 🌐 Laravel Live on EC2
![Laravel Live](screenshots/laravel-live.png)

### 🔐 GitHub Secrets Config
![Secrets](screenshots/github-secrets.png)

### ⚙️ Workflow Folder
![Workflow File](screenshots/workflow-file.png)


    
