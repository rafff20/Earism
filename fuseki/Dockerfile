# Use a Java base image
FROM openjdk:11

# Set the working directory
WORKDIR /fuseki

# Copy your config file into the container
COPY . .

# Expose the port Fuseki runs on (default is 3030)
EXPOSE 3030

# Start Fuseki with your specific command and configuration
CMD ["java", "-Xmx3500M", "-jar", "fuseki-server.jar", "--update", "--config", "config3.ttl"]
