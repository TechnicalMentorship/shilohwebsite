#include<iostream>
#include<cstdlib>
#include<ctime>

using namespace std;

const int totalChances = 5;

void introduction(); // Print out Introduction
int getNumberOfGame(); // Get number of game
int compareTwoCharacters(char,char); // Compare two data;
bool playOneGame(char); // Execute game

int main() {
    int i = 1;
    int numberOfGames = 0;
    char Answer;
    
    srand((unsigned int)time(NULL));
    
    introduction();
    
    numberOfGames=getNumberOfGame();
    
    
    while(i <= numberOfGames) {
        
        cout << "\n************************************" << endl;
        Answer = rand() % 26 + 'a';
        cout << "Let's play game " << i << endl;
        
        if(playOneGame(Answer)){
            
            cout << "You guessed it!!!\n";
            i++;
        }
        else{
            
            cout << "You did not guess the letter. It was " << Answer << endl;
            i++;
        }
        
    }
    
    return 0;
    
}

void introduction(){
    
    cout << "Welcome to the Letter Guessing Game" << endl;
    cout << "You will enter the number of games you want to play (1 - 4 games)" << endl;
    cout << "You have 5 chances to guess each letter" << endl;
    cout << "Let's begin:\n" << endl;
    cout << "--------------------------------\n";
    
}

int getNumberOfGame(){
    
    int numberOfgame;
    
    cout << "How many games do you want to play (1-4) ";
    
    cin >> numberOfgame;
    
    if(!cin){
        cin.clear();
        cin.ignore();
        cout << "Enter only vaild number, try again..." << endl;
        return getNumberOfGame();
    }
    
   else if(numberOfgame<1 || numberOfgame>4){
        
        cout << "Invalid number of games, try again..." << endl;
        return getNumberOfGame();

        }
    
        else{
            
        return numberOfgame;
            
    }
    
}

int compareTwoCharacters(char Answer,char guessAlpha){
    
    if(guessAlpha == Answer){
        
        return 0;
        
    }
    else if(guessAlpha > Answer){
        
        return -2;
    }
    else{
        
        return 2;
        
    }
    
}

bool playOneGame(char Answer){
    
    bool Flag=false;
    
    char guessAlpha;
    
    int Counter=0;
    
    while (Counter<totalChances) {
        
        cout << "Enter a guess: ";
        
        cin >> guessAlpha;
        
        if(compareTwoCharacters(Answer,guessAlpha)==0){
            
            Flag = true;
            
            break;
            
        }
        else if(compareTwoCharacters(Answer,guessAlpha)==2){
            
            cout << "the letter you are trying to guess comes after " << guessAlpha << endl;
            
        }
        else{
            
            cout << "the letter you are trying to guess comes before " << guessAlpha << endl;
            
        }
        
        Counter++;
        
    }
    
    if (Flag) {
        
        return true;
        
    }
    
    else {
        
        return false;
        
    }
    
}


