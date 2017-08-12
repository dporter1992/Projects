/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package movie;

public class Movie {

    
    public static void main(String[] args) {
        
         TestMovie mv = new TestMovie("Finding Nemo", "G");
         TestMovie mv1 = new TestMovie("Men in Black", "PG 13");
         TestMovie mv2 = new TestMovie("The Revenant","R");
        
         System.out.println("There are 3 movies available: ");
         mv.MovieDetails();
         mv1.MovieDetails();
         mv2.MovieDetails();
  
         
         
         
    }
    
    
    
}
