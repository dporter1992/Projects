/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package movie;

/**
 *
 * @author Dillon
 */
public class TestMovie {

    private String title;
    private String rating;
    
    public TestMovie(String title, String rating){
    this.title = title;
    this.rating = rating;
    
    }
    
     public void setRating(String Rating) 
    {
        rating = Rating;
    }
    // Get the rating
    public String getRating() 
    {
        return rating;
    }
    public void setTitle(String title) 
    {
        this.title = title; 
    }
  
   
    public String getTitle() 
    { 
        return title; 
    }
    
    
     public void MovieDetails()
    {
        System.out.println("The movie title is: " + title + ". The rating is " + rating + ".");
    }
    
}
