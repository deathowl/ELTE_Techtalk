#
# Cookbook Name:: elte_teszt
# Recipe:: default
#
# Copyright 2014, Ustream, Inc
#
# All rights reserved - Do Not Redistribute
#

elte = node['elte']


template File.join("/opt/elte.json") do
  source "elte.yml.erb"
  variables({
                :message => elte['szem'],
            })
  action :create
end
