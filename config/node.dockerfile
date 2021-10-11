FROM node:14-alpine

# Create app directory
WORKDIR /var/www
ENV HOME /var/www
RUN mkdir -p $HOME && \
    chown node:node $HOME
# Switch to user node
USER node
# We'll place our files in npm-package
# Create that folder, place empty place holders in there,
#   and create a link to them
RUN mkdir $HOME/npm-package && \
    touch $HOME/npm-package/package.json && \
    touch $HOME/npm-package/package-lock.json && \
    ln -s $HOME/npm-package/package.json $HOME/package.json && \
    ln -s $HOME/npm-package/package-lock.json $HOME/package-lock.json

# Install app dependencies
# A wildcard is used to ensure both package.json AND package-lock.json are copied
# where available (npm@5+)
COPY package*.json ./

RUN npm install
COPY . .
EXPOSE 8900
# CMD ["tail", "-f", "/dev/null"]
# CMD [ "node", "server.js" ]