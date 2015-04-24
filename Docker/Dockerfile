FROM tutum/apache-php

RUN apt-get update && apt-get install -yq git && rm -rf /var/lib/apt/lists/*
RUN rm -fr /app

ADD resources/.github_no_pw /.github
RUN chmod 600 /.github
#RUN eval "$(ssh-agent -s)"
#RUN ssh-add /.github
#RUN rm -f /.github
#RUN rm -rf /root/.ssh/known_hosts
RUN echo "    IdentityFile /.github" >> /etc/ssh/ssh_config
RUN mkdir /root/.ssh/
RUN ssh-keyscan github.com > /root/.ssh/known_hosts
RUN git clone git@github.com:eventsos/loverevolution.git .
RUN git checkout master && git reset --hard
ADD resources/localcontext /localcontext
RUN git checkout develop
RUN sed -i '/DocumentRoot/c\DocumentRoot /var/www/html/sources' /etc/apache2/sites-available/000-default.conf