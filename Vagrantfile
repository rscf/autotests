# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  # Available Boxes: https://atlas.hashicorp.com/search
  config.vm.box = "ubuntu/xenial64"

  # Virtual Machine will be available at 10.10.10.10:80
  config.vm.network "private_network", ip: "10.10.10.10"

  # Synced folder
  # config.vm.synced_folder "./", "/vagrant", disabled: true
  # config.vm.synced_folder "./", "/srv/og-app", create: true, group: "www-data", owner: "www-data"

  # VirtualBox settings
  config.vm.provider "virtualbox" do |v|
    # Don't boot with headless mode
    v.gui = false

    # Use VBoxManage to customize the VM. For example to change memory:
    v.customize ["modifyvm", :id, "--memory",               "512"]
    v.customize ["modifyvm", :id, "--cpuexecutioncap",      "95"]
    v.customize ["modifyvm", :id, "--natdnshostresolver1",  "on"]
    v.customize ["modifyvm", :id, "--natdnsproxy1",         "on"]
  end

  # Installing the required packages and internal workflow
  config.ssh.shell = "bash -c 'BASH_ENV=/etc/profile exec bash'"
  # config.vm.provision "shell", path: ".provision/run_once.sh"
  # config.vm.provision "shell", path: ".provision/add_cfdaemon.sh"
  # config.vm.provision "shell", run: "always", path: ".provision/run_always.sh"

end
