require 'sinatra'
require 'json'

class Appl < Sinatra::Base
  get '/' do
    subpages = File.open("data/subpages.json")
    @jsonsubpages = JSON.load(subpages)
    subpages.close()
    @curpage = "Homepage"
    erb :index
  end
  get '/about' do
    subpages = File.open("data/subpages.json")
    @jsonsubpages = JSON.load(subpages)
    subpages.close()
    @curpage = "About"
    erb :about
  end
  get '/experience' do
    subpages = File.open("data/subpages.json")
    @jsonsubpages = JSON.load(subpages)
    subpages.close()
    experience = File.open("data/experience.json")
    @experiences = JSON.load(experience)
    experience.close()
    @curpage = "Experience"
    erb :experience
  end
  get '/projects' do
    subpages = File.open("data/subpages.json")
    @jsonsubpages = JSON.load(subpages)
    subpages.close()
    projects = File.open("data/projects.json")
    @projects = JSON.load(projects)
    projects.close()
    @curpage = "Projects"
    erb :projects
  end
  get '/contact' do
    subpages = File.open("data/subpages.json")
    @jsonsubpages = JSON.load(subpages)
    subpages.close()
    @curpage = "Contact"
    erb :contact
  end
  get '/:other' do
    subpages = File.open("data/subpages.json")
    @jsonsubpages = JSON.load(subpages)
    subpages.close()
    @curpage = "Error 404"
    erb :page404
  end
end
