dev:
	docker build -t my-php-app . && docker run -it -p 8080:80 --rm --name my-running-app my-php-app

ppr:
	git push origin staging && gh pr create --web -B master