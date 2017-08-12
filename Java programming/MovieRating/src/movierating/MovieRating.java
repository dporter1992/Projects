/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package movierating;

import java.util.Scanner;

public class MovieRating {

   
    public static void main(String[] args) {
       
          Scanner user_input = new Scanner(System.in);
          System.out.print("Please enter your age: ");
          int userAge = Integer.parseInt(user_input.next());

            String mrating;
            System.out.print("Please enter the movie rating: ");
            mrating = user_input.next();
            
            if (userAge <= 12 && "G".equals(mrating))
             {
                 System.out.println("You are the correct age for this movie! ");
             }
            else if (userAge >= 13 && "PG13".equals(mrating))
             {
                 System.out.println("You are the correct age for this movie");
             }
            else if (userAge >= 18 && "R".equals(mrating))
             {
                 System.out.println("You are the correct age for this movie");
             }
            else {
            System.out.println ("You are not at the correct age for this movie. ");
            }

    }
      
}
    

