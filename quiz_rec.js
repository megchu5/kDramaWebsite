// redirect to a quiz recommendation after submission of the quiz
genres = {
    'romance':0,
    'comedy':0,
    'action':0,
    'fantasy':0
}

dramas = new Array (
    ['crash_landing', 'dots', 'lovestruck', 'one_spring', 'romance_book', 'start_up', 'suspicious'],
    ['true_beauty'],
    ['itaewon_class'],
    ['its_okay']
)

function quiz_submit() {
    // get answers
    best_part = document.getElementsByName('ans1')
    fav_actor = document.getElementsByName('ans2')
    fav_actress = document.getElementsByName('ans3')
    ideal_ending = document.getElementsByName('q4')
    date_place = document.getElementsByName('q5')

    // calculate points based on answer to question 1
    for (i=0; i<best_part.length; i++) {
        if (best_part[i].checked) {
            chosen(best_part[i].value)
            break
        }
        else if (i == (best_part.length - 1) && !best_part[i].checked) {
            alert('Please answer question 1!')
            return
        }
    }

    // calculate points based on answer to question 2
    q2_answered = false
    for (i=0; i<fav_actor.length; i++) {
        if (fav_actor[i].checked) {
            chosen(fav_actor[i].value)
            q2_answer = true
        }
    }

    // calculate points based on answer to question 3
    q3_answered = false
    for (i=0; i<fav_actress.length; i++) {
        if (fav_actress[i].checked) {
            chosen(fav_actress[i].value)
            q3_answer = true
        }
    }

    // calculate points based on answer to question 4
    for (i=0; i<ideal_ending.length; i++) {
        if (ideal_ending[i].checked) {
            chosen(ideal_ending[i].value)
            break
        }
        else if (i == (ideal_ending.length - 1) && !ideal_ending[i].checked) {
            alert('Please answer question 4!')
            return
        }
    }

    // calculate points based on answer to question 5
    for (i=0; i<date_place.length; i++) {
        if (date_place[i].checked) {
            chosen(date_place[i].value)
            break
        }
        else if (i == (date_place.length - 1) && !date_place[i].checked) {
            alert('Please answer question 5!')
            return
        }
    }

    recommend()
}

function chosen(answer) {
    if (answer == 'a') {
        genres['action'] += 1
    }
    else if (answer == 'b') {
        genres['romance'] += 1
    }
    else if (answer == 'c') {
        genres['comedy'] += 1
    }
    else if (answer == 'd') {
        genres['romance'] += 1
    }
    else {
        genres['fantasy'] += 1
    }
}

// compare the values for each genre and return the genre with the highest number of points
// if values tie, return the first genre in the dictionary that tied
function compare_points() {
    highest = 'romance'

    if (genres[highest] < genres['comedy']) {
        highest = 'comedy'
    }
    if (genres[highest] < genres['action']) {
        highest = 'action'
    }
    if (genres[highest] < genres['fantasy']) {
        highest = 'fantasy'
    }

    return highest
}

// returns a random integer between min and max, 
// exclusive of max but inclusive of min
function rand_num(min, max) {
    min = Math.ceil(min)
    max = Math.floor(max)

    if (min == max) {
        return min
    }
    num = Math.random() * (max - min) + min

    return Math.floor(num)
}

// using the values in the dictionary genres, recommend a drama in the genre with the most points
function recommend() {
    // get the genre with the most points
    highest = compare_points()

    // randomly select a drama within the selected genre
    if (highest == 'romance') {
        rec = dramas[0][rand_num(0, dramas[0].length)]
    }
    else if (highest == 'comedy') {
        rec = dramas[1][rand_num(1, dramas[1].length)]
    }
    else if (highest == 'action') {
        rec = dramas[2][rand_num(2, dramas[2].length)]
    }
    else {
        rec = dramas[3][rand_num(3, dramas[3].length)]
    }

    // open the drama info page in a new window
    rec_page = "Info_pages/" + rec + "_info.html"
    window.open(rec_page)
}